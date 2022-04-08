<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;


use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCharacterJob;

/**
 * @deprecated [1.0] [Eve's image server effectivly makes this job pointless. Visit https://docs.esi.evetech.net/docs/image_server.html for details ]
 * Get portrait urls for a character
 * 
 * https://esi.evetech.net/ui/#/Character/get_characters_character_id_portrait
 */
abstract class Portrait extends AbstractCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/portrait/';

    protected $version = 'v3';

    protected $tags = ['character'];
}