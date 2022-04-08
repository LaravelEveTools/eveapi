<?php

namespace LaravelEveTools\EveApi\Jobs\Clones;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return implants on the active clone of a character
 * 
 * https://esi.evetech.net/ui/#/Clones/get_characters_character_id_implants
 */
abstract class Implants extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/implants/';

    protected $scope = 'esi-clones.read_implants.v1';

    protected $version = 'v2';

    protected $tags = ['character', 'clone'];
}