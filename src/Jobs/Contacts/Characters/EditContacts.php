<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Characters;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class EditContacts extends AbstractAuthCharacterJob
{

    protected $method = 'PUT';

    protected $endpoint = '/characters/{character_id}/contacts/';

    protected $scope = 'esi-characters-write_contacts.v1';

    protected $version = 'v2';

    public $tags = ['character', 'contact'];

}