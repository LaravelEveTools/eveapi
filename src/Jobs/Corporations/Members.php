<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Members extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/members/';

    protected $scope = 'esi-corporations.read_membership.v1';

    protected $version = 'v4';

    public $tags = ['corporation'];

}