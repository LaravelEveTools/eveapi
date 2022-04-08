<?php

namespace LaravelEveTools\EveApi\Jobs\Location;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Information about the characters current location. Returns the current solar system id, and also the current station or structure ID if applicable
 * 
 * https://esi.evetech.net/ui/?version=dev#/Location/get_characters_character_id_location
 */
abstract class Location extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/location/';

    protected $scope = 'esi-location.read_location.v1';

    protected $version = 'v2';

    public $tags = ['character','location'];

}