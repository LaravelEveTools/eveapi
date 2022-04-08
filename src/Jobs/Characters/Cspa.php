<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Takes a source character ID in the url and a set of target character ID’s in the body, 
 * returns a CSPA charge cost
 * 
 * https://esi.evetech.net/ui/#/Character/post_characters_character_id_cspa
 */
abstract class Cspa extends AbstractAuthCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/cspa';

    protected $version = 'v5';

    protected $scope = 'esi-characters.read_contacts.v1';

    protected $tags = ['character'];
}