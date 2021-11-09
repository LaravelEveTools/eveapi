<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Roles extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/roles/';

    protected $scope = 'esi-characters.read_corporation_roles.v1';

    protected $version = 'v3';
}