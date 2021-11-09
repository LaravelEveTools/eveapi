<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class ContactNotifications extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/notifications/contacts/';

    protected $scope = 'esi-characters.read_notifications.v1';

    protected $version = 'v2';
}