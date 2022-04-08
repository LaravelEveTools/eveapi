<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

/**
 * Rename a fleet wing
 * 
 * https://esi.evetech.net/ui/?version=dev#/Fleets/put_fleets_fleet_id_wings_wing_id
 */
abstract class RenameWing extends AbstractFleetJob
{

    protected $method = 'put';

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