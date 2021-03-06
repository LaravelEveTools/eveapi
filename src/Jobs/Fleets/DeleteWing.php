<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

/**
 * Delete a fleet wing, only empty wings can be deleted. The wing may contain squads, but the squads must be empty
 * 
 * https://esi.evetech.net/ui/?version=dev#/Fleets/delete_fleets_fleet_id_wings_wing_id
 */
abstract class DeleteWing extends AbstractFleetJob
{

    protected $method = 'delete';

    protected $endpoint = '/fleets/{fleet_id}/wings/{wing_id}/';

    protected $scope = 'esi-fleets.write_fleet.v1';

    /**
     * @var int
     */
    private $wing_id;

    /**
     * @param int $fleet_id         ID of the fleet
     * @param int $wing_id          ID of the wing to delete
     * @param RefreshToken $token
     */
    public function __construct(int $fleet_id, int $wing_id, RefreshToken $token)
    {
        $this->wing_id = $wing_id;
        parent::__construct($fleet_id, $token);
    }

    /**
     * @return int
     */
    public function getWingId(): int
    {
        return $this->wing_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge_recursive(parent::buildUriValues(), [
            'wing_id' => $this->getWingId(),
        ]);
    }

}