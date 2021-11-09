<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Divisions extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/divisions/';

    protected $scope = 'esi-corporations.read_divisions.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}