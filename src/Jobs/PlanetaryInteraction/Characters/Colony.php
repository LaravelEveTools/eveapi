<?php

namespace LaravelEveTools\EveApi\Jobs\PlanetaryInteraction\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Colony extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/planets/';

    protected $scope = 'esi-planets.manage_planets.v1';

    public $tags = ['planetary interaction'];
}