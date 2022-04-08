<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/** 
 * Return contacts of a character
 * 
 * https://esi.evetech.net/ui/#/Contacts/get_characters_character_id_contacts
 */
abstract class Contacts extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/contacts';

    protected $scope = 'esi-characters.read_contacts.v1';

    protected $version = 'v2';

    protected $tags = ['character', 'contact'];

    protected $page = 1;
}