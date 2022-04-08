<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

/**
 * Return information about wings in a fleet
 * 
 * https://esi.evetech.net/ui/?version=dev#/Fleets/get_fleets_fleet_id_wings
 */
abstract class Wings extends AbstractFleetJob
{
    protected $method = 'get';

    protected $version = 'v1';

    protected $endpoint = '/fleets/{fleet_id}/wings/';

    protected $scope = 'esi-fleets.read_fleet.v1';



}