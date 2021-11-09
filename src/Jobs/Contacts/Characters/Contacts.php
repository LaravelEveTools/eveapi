<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Contacts extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/contacts';

    protected $scope = 'esi-characters.read_contacts.v1';

    protected $version = 'v2';

    protected $page = 1;
}