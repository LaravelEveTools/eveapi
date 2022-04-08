<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Return corporation standings from agents, NPC corporations, and factions
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_standings
 */
abstract class Standings extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/standings/';

    protected $scope = 'esi-corporations.read_standings.v1';

    protected $version = 'v2';

    protected $page = 1;

    public $tags = ['corporation'];
}