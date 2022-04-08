<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

/**
 * Return details about a fleet
 * 
 * https://esi.evetech.net/ui/#/Fleets/get_fleets_fleet_id
 */
abstract class Fleet extends AbstractFleetJob
{
    protected $method = 'get';

    protected $version = 'v1';

    protected $endpoint = '/fleets/{fleet_id}/';

    protected $scope = 'esi-fleets.read_fleet.v1';

}