<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Paginated list of all entities capable of observing and recording mining for a corporation
 * 
 * https://esi.evetech.net/ui/?version=dev#/Industry/get_corporation_corporation_id_mining_observers
 */
abstract class MiningObservers extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporation/{corporation_id}/mining/observers/';

    protected $version = 'v1';

    protected $scope = 'esi-industry.read_corporation_mining.v1';

    protected $page = 1;

}