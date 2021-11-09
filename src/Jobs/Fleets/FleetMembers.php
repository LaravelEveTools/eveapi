<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

abstract class FleetMembers extends AbstractFleetJob
{

    protected $method = 'get';

    protected $version = 'latest';

    protected $endpoint = '/fleets/{fleet_id}/members/';

    protected $scope = 'esi-fleets.read_fleet.v1';


}