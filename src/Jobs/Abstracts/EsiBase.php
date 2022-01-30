<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

//use App\Exceptions\TemporaryEsiOutageException;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use LaravelEveTools\EveApi\Contracts\Middleware\CheckEsiStatusInterface;
use LaravelEveTools\EveApi\Contracts\Middleware\CheckServerStatusInterface;
use LaravelEveTools\EveApi\Events\EsiLoggableEvent;
use LaravelEveTools\EveApi\Exceptions\PermanentInvalidTokenException;
use LaravelEveTools\EveApi\Exceptions\TemporaryEsiOutageException;
use LaravelEveTools\EveApi\Exceptions\UnavailableEveServerException;
use LaravelEveTools\EveApi\Exceptions\UndocumentedEsiResponse;
use LaravelEveTools\EveApi\Helpers\LoggingContainer;
use LaravelEveTools\EveApi\Jobs\Middleware\CheckEsiRateLimit;
use LaravelEveTools\EveApi\Models\RefreshToken;
use Seat\Eseye\Containers\EsiAuthentication;
use Seat\Eseye\Containers\EsiResponse;
use Seat\Eseye\Exceptions\RequestFailedException;

abstract class EsiBase extends AbstractJob
{
    const RATE_LIMIT = 80;

    const RATE_LIMIT_DURATION = 300;

    const RATE_LIMIT_KEY = 'esitratelimit';

    const PERMANENT_INVALID_TOKEN_MESSAGE = [
        'invalid_token: The refresh token is expired.',
        'invalid_token: The refresh token does not match the client specified.',
        'invalid_token: Invalid refresh token. Character grant missing/expired.',
        'invalid_token: Invalid refresh token. Unable to migrate grant.',
        'invalid_token: Invalid refresh token. Token missing/expired.'
    ];

    /**
     * Default Queue for run all jobs
     * @var string
     */
    public $queue = 'public';

    /**
     * How many times to retry a job
     * @var int
     */
    public $tries = 3;

    /**
     * HTTP Method for API call
     *
     * GET, POST, PUT, DELETE
     * @var string
     */
    protected $method = 'get';

    /**
     * API Endpoint
     * @var string
     */
    protected $endpoint = '';

    /**
     * Endpoint version
     *
     * eg: v1, v4
     * @var string
     */
    protected $version = '';

    /**
     * Scope required for the endpoint
     * @var string
     */
    protected $scope = 'public';

    /**
     * For jobs which have paged results.
     * @var null
     */
    protected $page = null;

    /**
     * Request Body
     * @var array
     */
    protected $request_body = [];

    /**
     * Query string parameters
     * @var array
     */
    protected $query_string = [];

    /**
     * @var \LaravelEveTools\EveApi\Models\RefreshToken
     */
    protected $token;

    /**
     * @var \Seat\Eseye\Eseye|null
     */
    protected $client;


    protected function skipIfTrue(EsiResponse $response): bool
    {
        return $response->isCachedLoad() && app()->environment('production');
    }

    /**
     * Things to check before running the job.
     * @return array
     */
    public function middleware()
    {
        return [
            app()->make(CheckEsiStatusInterface::class),
            app()->make(CheckServerStatusInterface::class),
            new CheckEsiRateLimit,
        ];
    }

    protected function buildUriValues(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function tags(): array
    {
        $tags = parent::tags();
        if (is_null($this->token))
            $tags[] = 'public';

        return $tags;
    }

    /**
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope ?: '';
    }

    /**
     * @return int
     */
    public function getRateLimitKeyTtl(): int
    {
        return Redis::ttl(Cache::getPrefix() . self::RATE_LIMIT_KEY);
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles ?: [];
    }

    /**
     * @return \LaravelEveTools\EveApi\Models\RefreshToken|null
     */
    public function getToken(): ?RefreshToken
    {
        return $this->token;
    }

    /**
     * @return \Illuminate\Support\Carbon
     */
    public function retryAfter()
    {
        return now()->addSeconds($this->attempts() * 300);
    }

    /**
     * @param Exception $exception
     * @throws Exception
     */
    public function failed(\Throwable $exception)
    {
        parent::failed($exception);

        if ($exception instanceof PermanentInvalidTokenException) {
            $this->token->delete();
        }

        if ($exception instanceof UnavailableEveServerException) {
            cache()->remember('eve_sever_status', 60, function () {
                return null;
            });
        }
    }

    /**
     * @param int $amount
     * @throws Exception
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function incrementEsiRateLimit(int $amount = 1)
    {
        if ($this->getRateLimitKeyTtl() > 3) {
            cache()->increment(self::RATE_LIMIT_KEY, $amount);
        } else {
            cache()->set(self::RATE_LIMIT_KEY, $amount, carbon('now')
                ->addSeconds(self::RATE_LIMIT_DURATION));
        }
    }

    public function getRequestBody($key = null)
    {
        if (is_null($key))
            return $this->request_body;

        return Arr::get($this->request_body, $key, null);
    }

    public function getQueryString($key = null)
    {
        if (is_null($key))
            return $this->query_string;

        return Arr::get($this->query_string, $key, null);
    }


    /**
     * @param array $path_values
     * @return EsiResponse
     * @throws PermanentInvalidTokenException
     * @throws RequestFailedException
     * @throws TemporaryEsiOutageException
     * @throws UnavailableEveServerException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \Seat\Eseye\Exceptions\InvalidAuthenticationException
     * @throws \Seat\Eseye\Exceptions\InvalidContainerDataException
     */
    public function retrieve(array $path_values = []): EsiResponse
    {
        $this->validateCall();

        $client = $this->eseye();
        $client->setVersion($this->version);
        $client->setBody($this->getRequestBody());
        $client->setQueryString($this->getQueryString());


        if (!is_null($this->page))
            $client->page($this->page);


        try {
            $result = $client->invoke($this->method, $this->endpoint, empty($path_values) ? $this->buildUriValues() : $path_values);

            $this->updateRefreshToken();
        } catch (RequestFailedException $exception) {
            $this->handleEsiFailedCall($exception);
        }


        if ($result->isCachedLoad())
            return $result;

        $this->warning($result);

        return $result;
    }

    /**
     * @throws Exception
     */
    public function validateCall(): void
    {
        if (!in_array($this->method, ['get', 'post', 'put', 'patch', 'delete']))
            throw new Exception('Invalid HTTP Method used');

        if (trim($this->endpoint === ''))
            throw new Exception('Empty endpoint');

        if (trim($this->version) === '' && (in_array('meta', $this->tags())))
            throw new Exception('version is empty');

    }

    /**
     * @throws \Seat\Eseye\Exceptions\InvalidContainerDataException
     */
    public function eseye()
    {
        $this->client = app('esi-client');

        if (is_null($this->token))
            return $this->client = $this->client->get();
        $this->token = $this->token->fresh();

        return $this->client = $this->client->get(new EsiAuthentication([
            'refresh_token' => $this->token->refresh_token,
            'access_token' => $this->token->token,
            'token_expires' => $this->token->expires_on,
            'scopes' => $this->token->scopes,
        ]));
    }

    /**
     * @param \Seat\Eseye\Containers\EsiResponse $response
     * @throws \Seat\Eseye\Exceptions\InvalidContainerDataException
     */
    public function warning(EsiResponse $response): void
    {

        if (!is_null($response->pages) && $this->page === null) {
            $this->eseye()->getLogger()->warning('Responses contained pages but none was expected');

            event(new EsiLoggableEvent((new LoggingContainer)
                ->set('type', 'endpoint_warninig')
                ->set('ec', 'unexpected_page')
                ->set('el', $this->version)
                ->set('ev', $this->endpoint)
            ));
        }

        if (!is_null($this->page) && $response->pages === null) {
            $this->eseye()->getLogger()->warning('Expected a paged response but had none');

            event(new EsiLoggableEvent((new LoggingContainer)
                ->set('type', 'endpoint_warning')
                ->set('ec', 'unexpected_pages')
                ->set('el', $this->version)
                ->set('ev', $this->endpoint)
            ));
        }

        if (array_key_exists('warning', $response->headers)) {
            $this->eseye()->getLogger()->warnining('A response contained a warning: ' .
                $response->headers['Warning']);

            event(new EsiLoggableEvent((new LoggingContainer)
                ->set('type', 'generic_warning')
                ->set('ec', 'missing_pages')
                ->set('el', $this->endpoint)
                ->set('ev', $response->headers['Warning'])
            ));
        }
    }

    /**
     * @throws \Seat\Eseye\Exceptions\InvalidAuthenticationException
     */
    public function updateRefreshToken(): void
    {
        tap($this->token, function ($token) {

            if (is_null($this->client) || is_null($token))
                return;

            if (!$this->client->isAuthenticated())
                return;

            $last_auth = $this->client->getAuthentication();

            if (!empty($last_auth->refresh_token))
                $token->refresh_token = $last_auth->refresh_token;

            $token->token = $last_auth->access_token ?? '-';
            $token->expires_on = $last_auth->token_expires;

            $token->save();
        });
    }

    /**
     * @param int|null $pages
     * @return bool
     */
    public function nextPage(?int $pages): bool
    {
        if (is_null($pages) || $this->page >= $pages)
            return false;

        $this->page++;

        return true;
    }

    public function isPagedJob(): bool
    {
        return !is_null($this->page);
    }

    /**
     * @param RequestFailedException $exception
     * @throws TemporaryEsiOutageException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws PermanentInvalidTokenException
     * @throws UnavailableEveServerException
     * @throws RequestFailedException
     */
    private function handleEsiFailedCall(RequestFailedException $exception)
    {
        $this->incrementEsiRateLimit();

        $response = $exception->getEsiResponse();

        if ($response->getErrorCode() == 403 && $response->error() == 'token expiry is too far in the future') {
            if ($this->token) {
                $this->token->expires_on = carbon()->subMinutes(10);
                $this->token->save();
            }

            throw new TemporaryEsiOutageException($response->error(), $response->getErrorCode());
        }

        if ($response->getErrorCode() == 400 && in_array($response->error(), self::PERMANENT_INVALID_TOKEN_MESSAGE))
            throw new PermanentInvalidTokenException($response->error(), $response->getErrorCode());

        if (($response->getErrorCode() == 503 && $response->error() == 'The datasource tranquility is temporarily unavailable') ||
            ($response->getErrorCode() == 504 && $response->error() == 'Timeout contacting tranquility'))
            throw new UnavailableEveServerException($response->error(), $response->getErrorCode());

        if ($response->getErrorCode() == 520) {
            $this->delete();
            throw new UndocumentedEsiResponse($response->error(), $response->getErrorCode());
        }

        if ($response->getErrorCode() >= 500)
            throw new TemporaryEsiOutageException($response->error(), $response->getErrorCode());


        throw $exception;
    }
}
