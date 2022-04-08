<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCharacterJob;

/**
 * Public information about a character
 * 
 * https://esi.evetech.net/ui/#/Character/get_characters_character_id
 */
abstract class Character extends AbstractCharacterJob
{

    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/';

    protected $version = 'v5';

    protected $tags = ['public', 'character'];

}