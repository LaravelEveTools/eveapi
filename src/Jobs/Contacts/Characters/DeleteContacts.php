<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Bulk delete contacts
 * 
 * https://esi.evetech.net/ui/#/Contacts/delete_characters_character_id_contacts
 */
abstract class DeleteContacts extends AbstractAuthCharacterJob
{

    protected $method = 'delete';

    protected $endpoint = '/characters/{character_id}/contacts/';

    protected $version = 'v2';

    protected $scope = 'esi-characters.write_contacts.v1';

    public $tags = ['character', 'contact'];

}