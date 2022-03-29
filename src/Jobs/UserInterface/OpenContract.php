<?php

namespace LaravelEveTools\EveApi\Jobs\UserInterface;

use LaravelEveTools\EveApi\Events\UserInterface\ContractWindowOpened;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthedJob;
use LaravelEveTools\EveApi\Models\RefreshToken;

class OpenContract extends AbstractAuthedJob
{
    protected $endpoint = '/ui/openwindow/contract/';

    protected $scope = 'esi-ui.open_window.v1';

    protected $version = 'v1';

    public $tags = ['ui'];

    /**
     * @var int
     */
    private $contract_id;

    public function __construct(RefreshToken $token, int $contract_id)
    {
        $this->contract_id = $contract_id;
        parent::__construct($token);
    }

    /**
     * @throws \Seat\Eseye\Exceptions\RequestFailedException
     * @throws \Seat\Eseye\Exceptions\InvalidContainerDataException
     * @throws \LaravelEveTools\EveApi\Exceptions\UnavailableEveServerException
     * @throws \App\Exceptions\TemporaryEsiOutageException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \Seat\Eseye\Exceptions\InvalidAuthenticationException
     * @throws \LaravelEveTools\EveApi\Exceptions\PermanentInvalidTokenException
     */
    public function handle(){
        $this->query_string['contract_id'] = $this->contract_id;

        $result = $this->retrieve();

        dispatch(new ContractWindowOpened($result, $this->contract_id));
    }
}