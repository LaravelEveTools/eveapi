<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class ContainerLogs extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/container/logs/';

    protected $scope = 'esi-corporations.read_container_logs.v1';

    protected $version = 'v3';

    protected $page = 1;

    public $tags = ['corporation'];
}