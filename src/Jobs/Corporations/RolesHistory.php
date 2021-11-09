<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class RolesHistory extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/roles/history/';

    protected $scope = 'esi-corporations.read_corporation_membership.v1';

    protected $version = 'v2';

    protected $page = 1;

    public $tags = ['corporation'];
}