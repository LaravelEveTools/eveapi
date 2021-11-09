<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class MedalsIssued extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/medals/issued';

    protected $scope = 'esi-corporations.read_medals.v1';

    protected $version = 'v2';

    protected $page = 1;

    public $tags = ['corporation'];
}