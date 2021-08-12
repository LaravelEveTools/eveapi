<?php

namespace LaravelEveTools\EveApi\Jobs\Location;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Online extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/online/';

    protected $scope = 'esi-location.read_location.v1';

    protected $version = 'v2';

    public $tags = ['location'];
    
}