<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCorporationJob;

/**
 * Public information about a corporation
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id
 */
abstract class Corporation extends AbstractCorporationJob
{
    protected $method = 'GET';

    protected $endpoint = '/corporations/{corporation_id}/';

    protected $version = 'v5';

    public $tags = ['public', 'corporation'];

}