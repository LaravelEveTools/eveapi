<?php

namespace LaravelEveTools\EveApi\Jobs\Location;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Get the current ship type, name and id
 * 
 * https://esi.evetech.net/ui/?version=dev#/Location/get_characters_character_id_ship
 */
abstract class Ship extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/ship/';

    protected $scope = 'esi-location.read_ship_type.v1';

    protected $version = 'v2';

    public $tags = ['character','location'];
    
}