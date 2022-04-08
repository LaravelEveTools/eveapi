<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCorporationJob;

/**
 * Get a list of all the alliances a corporation has been a member of
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_alliancehistory
 */
abstract class AllianceHistory extends AbstractCorporationJob
{
    protected $method  = 'GET';

    protected $endpoint = '/corporations/{corporation_id}/alliancehistory/';

    protected $version = 'v3';

    public $tags  = ['public', 'corporation'];
}