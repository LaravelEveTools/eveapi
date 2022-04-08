<?php

namespace LaravelEveTools\EveApi\Jobs\Location;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Checks if the character is currently online
 * 
 * https://esi.evetech.net/ui/?version=dev#/Location/get_characters_character_id_online
 */
abstract class Online extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/online/';

    protected $scope = 'esi-location.read_location.v1';

    protected $version = 'v3';

    public $tags = ['character', 'location'];
    
}