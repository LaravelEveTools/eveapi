<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Labels extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/contacts/labels/';

    protected $version = 'v1';

    protected $scope = 'esi-characters.read_contacts.v1';
}