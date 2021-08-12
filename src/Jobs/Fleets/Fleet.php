<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

abstract class Fleet extends AbstractFleetJob
{

    protected $endpoint = '/fleets/{fleet_id}/';

    protected $scope = 'esi-fleets.read_fleet.v1';

}