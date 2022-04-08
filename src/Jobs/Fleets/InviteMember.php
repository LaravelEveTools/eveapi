<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

/**
 * Invite a character into the fleet. If a character has a CSPA charge set it is not possible to invite them to the fleet using ESI
 * 
 * https://esi.evetech.net/ui/?version=dev#/Fleets/post_fleets_fleet_id_members
 */
abstract class InviteMember extends AbstractFleetJob
{

    protected $method = 'post';

    protected $endpoint = '/fleets/{fleet_id}/members/';

    protected $scope = 'esi-fleets.write_fleet.v1';

    protected $version = 'v1';


}
