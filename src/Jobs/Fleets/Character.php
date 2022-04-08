<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return the fleet ID the character is in, if any.
 * 
 * https://esi.evetech.net/ui/#/Fleets/get_characters_character_id_fleet
 */
abstract class Character extends AbstractAuthCharacterJob
{

    protected $method = 'get';

    protected $version = 'v2';

    protected $endpoint = '/characters/{character_id}/fleet/';

    protected $scope = 'esi-fleets.read_fleet.v1';

    protected $tags = ['character', 'fleet'];

}