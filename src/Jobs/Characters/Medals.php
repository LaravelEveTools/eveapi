<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;


/**
 * Return a list of medals the character has
 * 
 * https://esi.evetech.net/ui/#/Character/get_characters_character_id_medals
 */
abstract class Medals extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/medals/';

    protected $scope = 'esi-characters.read_medals.v1';

    protected $version = 'v2';

    protected $tags = ['character'];
}