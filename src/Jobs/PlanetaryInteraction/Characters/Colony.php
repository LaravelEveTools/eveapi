<?php

namespace LaravelEveTools\EveApi\Jobs\PlanetaryInteraction\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Returns a list of all planetary colonies owned by a character.
 * 
 * https://esi.evetech.net/ui/?version=dev#/Planetary%20Interaction/get_characters_character_id_planets
 */
abstract class Colony extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/planets/';

    protected $scope = 'esi-planets.manage_planets.v1';

    public $tags = ['planetary interaction'];
}