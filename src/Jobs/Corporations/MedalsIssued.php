<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Returns medals issued by a corporation
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_medals_issued
 */
abstract class MedalsIssued extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/medals/issued';

    protected $scope = 'esi-corporations.read_medals.v1';

    protected $version = 'v2';

    protected $page = 1;

    public $tags = ['corporation'];
}