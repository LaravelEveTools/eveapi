<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Returns logs recorded in the past seven days from all audit log secure containers 
 * (ALSC) owned by a given corporation
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_containers_logs
 */
abstract class ContainerLogs extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/container/logs/';

    protected $scope = 'esi-corporations.read_container_logs.v1';

    protected $version = 'v3';

    protected $page = 1;

    public $tags = ['corporation'];
}