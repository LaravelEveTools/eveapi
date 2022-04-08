<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Bulk add contacts with same settings
 * 
 * https://esi.evetech.net/ui/#/Contacts/post_characters_character_id_contacts
 */
abstract class AddContact extends AbstractAuthCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/contacts';

    protected $version = 'v2';

    protected $scope = 'esi-characters.write_contacts.v1';

    protected $tags = ['character', 'contacts'];

}