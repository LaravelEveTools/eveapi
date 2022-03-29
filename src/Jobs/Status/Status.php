<?php

namespace LaravelEveTools\EveApi\Jobs\Status;

use Seat\Eseye\Exceptions\InvalidAuthenticationException;
use Seat\Eseye\Exceptions\InvalidContainerDataException;

class Status extends \LaravelEveTools\EveApi\Jobs\EsiBase
{
    /**
     * @var string
     */
    protected $method = 'get';

    /**
     * @var string
     */
    protected $endpoint = '/status/';

    /**
     * @var string
     */
    public $queue = 'high';

    /**
     * @var string
     */
    protected $version = 'v1';

    /**
     * @var string[]
     */
    protected $tags = ['public', 'meta'];

    /**
     * @return array
     */
    public function middleware(): array
    {
        return [];
    }
}