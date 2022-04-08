<?php

namespace LaravelEveTools\EveApi\Jobs\Skills;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * List all trained skills for the given character
 * 
 * https://esi.evetech.net/ui/?version=latest#/Skills/get_characters_character_id_skills
 */
abstract class Skills extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/skills/';

    protected $version = 'v2';

    protected $scope = 'esi-skills.read_skills.v1';

    protected $tags = ['character', 'skill'];


}