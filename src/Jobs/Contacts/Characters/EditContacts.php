<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Bulk edit contacts with same settings
 * 
 * https://esi.evetech.net/ui/#/Contacts/put_characters_character_id_contacts
 */
abstract class EditContacts extends AbstractAuthCharacterJob
{

    protected $method = 'PUT';

    protected $endpoint = '/characters/{character_id}/contacts/';

    protected $scope = 'esi-characters-write_contacts.v1';

    protected $version = 'v2';

    public $tags = ['character', 'contact'];

}