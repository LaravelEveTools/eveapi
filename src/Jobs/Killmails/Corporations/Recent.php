<?php

namespace LaravelEveTools\EveApi\Jobs\Killmails\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Recent extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/killmails/recent/';

    protected $scope = 'esi-killmails.read_corporation_killmails.v1';

}