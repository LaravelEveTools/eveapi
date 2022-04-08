<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

/**
 * Create a new wing in a fleet
 * 
 * https://esi.evetech.net/ui/?version=dev#/Fleets/post_fleets_fleet_id_wings
 */
abstract class CreateWing extends AbstractFleetJob
{

    protected $method = 'post';

    protected $endpoint = '/fleets/{fleet_id}/wings/';

    protected $scope = 'esi-fleets.write_fleet.v1';

}