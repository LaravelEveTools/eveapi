<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

abstract class InviteMember extends AbstractFleetJob
{

    protected $method = 'post';

    protected $endpoint = '/fleets/{fleet_id}/members/';

    protected $scope = 'esi-fleets.write_fleet.v1';


}