<?php

namespace LaravelEveTools\EveApi\Jobs\Skills;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return attributes of a character
 * 
 * https://esi.evetech.net/ui/?version=latest#/Skills/get_characters_character_id_attributes
 */
abstract class Attributes extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/attributes/';

    protected $scope = 'esi-skills.read_skills.v1';

    protected $version = 'v1';

    protected $tags = ['character', 'skill'];

}