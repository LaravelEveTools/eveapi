<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;


/**
 * Return character standings from agents, NPC corporations, and factions
 * 
 * https://esi.evetech.net/ui/#/Character/get_characters_character_id_standings
 */
abstract class Standings extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/standings/';

    protected $scope = 'esi-characters.read_standings.v1';

    protected $version = 'v2';

    protected $tags = ['character'];
}