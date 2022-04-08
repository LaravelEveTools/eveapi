<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Returns a character’s titles
 * 
 * https://esi.evetech.net/ui/#/Character/get_characters_character_id_titles
 */
abstract class Titles extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/titles/';

    protected $scope = 'esi-characters.read_titles.v1';

    protected $version = 'v2';

    protected $tags = ['character'];
}