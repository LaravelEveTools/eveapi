<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Roles extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/roles/';

    protected $scope = 'esi-corporations.read_corporation_membership.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}