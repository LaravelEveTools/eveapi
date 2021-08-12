<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Medals extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/medals/';

    protected $scope = 'esi-corporations.read_medals.v1';

    protected $version = 'v2';

    protected $page = 1;

    public $tags = ['corporation'];
}