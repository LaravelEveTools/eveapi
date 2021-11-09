<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Notifications extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/notifications/';

    protected $scope = 'esi-characters.read_notifications.v1';

    protected $version = 'v6';
}