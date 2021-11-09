<?php

namespace LaravelEveTools\EveApi\Jobs\Location;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Ship extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/ship/';

    protected $scope = 'esi-location.read_ship_type.v1';

    protected $version = 'v2';

    public $tags = ['location'];
    
}