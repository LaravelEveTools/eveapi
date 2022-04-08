<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Returns a corporation’s medals
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_medals
 */
abstract class Medals extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/medals/';

    protected $scope = 'esi-corporations.read_medals.v1';

    protected $version = 'v2';

    protected $page = 1;

    public $tags = ['corporation'];
}