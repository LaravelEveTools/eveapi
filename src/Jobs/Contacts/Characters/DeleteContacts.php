<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Characters;

use App\Jobs\AbstractedAuthCharacterJob;
use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Middleware\Contacts\CheckDeleteContacts;

abstract class DeleteContacts extends AbstractedAuthCharacterJob
{

    protected $method = 'delete';

    protected $endpoint = '/characters/{character_id}/contacts/';

    protected $version = 'v2';

    protected $scope = 'esi-characters.write_contacts.v1';

    public $tags = ['character', 'contact'];

}