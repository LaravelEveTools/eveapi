<?php

namespace LaravelEveTools\EveApi\Jobs\Skills;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * List the configured skill queue for the given character
 * 
 * https://esi.evetech.net/ui/?version=latest#/Skills/get_characters_character_id_skillqueue
 */
abstract class Queue extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/skillqueue/';

    protected $version = 'v2';

    protected $scope = 'esi-skills.read_skillqueue.v1';

    protected $tags = ['character', 'skill'];


}