<?php

namespace LaravelEveTools\EveApi\Jobs\Clones;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Implants extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/implants/';

    protected $scope = 'esi-clones.read_implants.v1';

    protected $version = 'v2';
}