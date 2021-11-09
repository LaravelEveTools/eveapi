<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Jobs extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/industry/jobs/';

    protected $scope = 'esi-industry.read_corporation_jobs.v1';

    protected $page = 1;
}