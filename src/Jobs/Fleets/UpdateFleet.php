<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

abstract class UpdateFleet extends AbstractFleetJob
{

    protected $method = 'put';

    protected $endpoint = '/fleets/{fleet_id}/';

    protected $scope = 'esi-fleets.write_fleet.v1';

}