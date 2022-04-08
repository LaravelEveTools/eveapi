<?php

namespace LaravelEveTools\EveApi\Jobs\Status;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * EVE Server status
 * 
 * https://esi.evetech.net/ui/?version=latest#/Status/get_status
 */
abstract class Status extends EsiBase
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