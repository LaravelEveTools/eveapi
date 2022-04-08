<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return custom labels for a character’s contacts
 * 
 * https://esi.evetech.net/ui/#/Contacts/get_characters_character_id_contacts_labels
 */
abstract class Labels extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/contacts/labels/';

    protected $version = 'v1';

    protected $scope = 'esi-characters.read_contacts.v1';

    protected $tags = ['character', 'contact'];
}