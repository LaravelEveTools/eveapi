<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

/**
 * Update settings about a fleet
 * 
 * https://esi.evetech.net/ui/?version=dev#/Fleets/put_fleets_fleet_id
 */
abstract class UpdateFleet extends AbstractFleetJob
{

    protected $method = 'put';

    protected $endpoint = '/fleets/{fleet_id}/';

    protected $scope = 'esi-fleets.write_fleet.v1';

    protected $fleet_settings = [];

     /**
     * @param int $fleet_id ID of the fleet
     * @param RefreshToken $token
     */
    public function __construct(int $fleet_id, array $fleet_settings, RefreshToken $token)
    {
        $this->fleet_settings = $fleet_settings;
        parent::__construct($fleet_id, $token);
    }

}