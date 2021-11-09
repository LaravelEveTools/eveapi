<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class MiningExtractions extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporation/{corporation_id}/mining/extractions/';

    protected $scope = 'esi-industry.read_corporation_mining.v1';

    public $tags = ['industry'];

    protected $page = 1;

}