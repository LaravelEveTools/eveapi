<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return a character’s jump activation and fatigue information
 * 
 * https://esi.evetech.net/ui/#/Character/get_characters_character_id_fatigue
 */
abstract class Fatigue extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/fatigue/';

    protected $scope = 'esi-characters.read_fatigue.v1';

    protected $version = 'v2';

    protected $tags = ['character'];
}