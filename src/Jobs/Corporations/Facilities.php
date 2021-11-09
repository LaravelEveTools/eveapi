<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Facilities extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/facilities/';

    protected $scope = 'esi-corporations.read_facilities.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}