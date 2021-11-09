<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Character extends AbstractAuthCharacterJob
{

    protected $method = 'get';

    protected $version = 'v2';

    protected $endpoint = '/characters/{character_id}/fleet/';

    protected $scope = 'esi-fleets.read_fleet.v1';


}