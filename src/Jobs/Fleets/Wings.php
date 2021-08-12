<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

abstract class Wings extends AbstractFleetJob
{


    protected $endpoint = '/fleets/{fleet_id}/wings/';

    protected $scope = 'esi-fleets.read_fleet.v1';



}