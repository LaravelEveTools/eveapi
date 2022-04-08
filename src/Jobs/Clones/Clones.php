<?php

namespace LaravelEveTools\EveApi\Jobs\Clones;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * A list of the character’s clones
 * 
 * https://esi.evetech.net/ui/#/Clones/get_characters_character_id_clones
 */
abstract class Clones extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/clones/';

    protected $scope = 'esi-clones.read_clones.v1';

    protected $version = 'v4';

    protected $tags = ['character', 'clone'];
}