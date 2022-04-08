<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Extraction timers for all moon chunks being extracted by refineries belonging to a corporation.
 * 
 * https://esi.evetech.net/ui/?version=dev#/Industry/get_corporation_corporation_id_mining_extractions
 */
abstract class MiningExtractions extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporation/{corporation_id}/mining/extractions/';

    protected $version = 'V1';

    protected $scope = 'esi-industry.read_corporation_mining.v1';

    public $tags = ['character','industry'];

    protected $page = 1;

}