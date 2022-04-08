<?php
namespace LaravelEveTools\EveApi\Jobs\Status;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Pings the ESI Endpoint
 * 
 * 
 */
abstract class Esi extends EsiBase
{

    /**
     * @var string
     */
    protected $method = 'get';

    protected $endpoint = '/ping';

    protected $tags = ['public', 'meta'];

    public function middleware()
    {
        return [];
    }


}