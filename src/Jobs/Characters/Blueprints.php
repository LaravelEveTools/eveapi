<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Blueprints extends AbstractAuthCharacterJob
{

    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/blueprints/';

    protected $version = 'v3';

    protected $scope = 'esi-characters.read-blueprints.v1';

    protected $tags = ['character'];

    protected $page = 1;
}