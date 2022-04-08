<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * List industry jobs run by a corporation
 * 
 * https://esi.evetech.net/ui/?version=dev#/Industry/get_corporations_corporation_id_industry_jobs
 */
abstract class Jobs extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/industry/jobs/';

    protected $scope = 'esi-industry.read_corporation_jobs.v1';

    protected $page = 1;
}