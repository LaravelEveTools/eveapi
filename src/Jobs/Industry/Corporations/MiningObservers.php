<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class MiningObservers extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporation/{corporation_id}/mining/observers/';

    protected $scope = 'esi-industry.read_corporation_mining.v1';

    protected $page = 1;

}