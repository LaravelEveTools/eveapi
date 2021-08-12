<?php

namespace LaravelEveTools\EveApi\Jobs\Clones;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Clones extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/clones/';

    protected $scope = 'esi-clones.read_clones.v1';

    protected $version = 'v4';
}