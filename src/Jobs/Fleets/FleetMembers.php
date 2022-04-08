<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

/**
 * Return information about fleet members
 * 
 * https://esi.evetech.net/ui/?version=dev#/Fleets/get_fleets_fleet_id_members
 */
abstract class FleetMembers extends AbstractFleetJob
{

    protected $method = 'get';

    protected $version = 'v1';

    protected $endpoint = '/fleets/{fleet_id}/members/';

    protected $scope = 'esi-fleets.read_fleet.v1';


}
