<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return a list of blueprints the character owns
 * This endpoint is cached
 * 
 * https://esi.evetech.net/ui/#/Character/get_characters_character_id_blueprints
 */
abstract class Blueprints extends AbstractAuthCharacterJob
{

    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/blueprints/';

    protected $version = 'v3';

    protected $scope = 'esi-characters.read-blueprints.v1';

    protected $tags = ['character'];

    protected $page = 1;
}