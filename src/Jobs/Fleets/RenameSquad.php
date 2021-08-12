<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

abstract class RenameSquad extends AbstractFleetJob
{
    protected $method = 'put';

    protected $endpoint = '/fleets/{fleet_id}/squads/{squad_id}';

    protected $scope = 'esi-fleets.write_fleets.v1';

    /**
     * @var int
     */
    private $squad_id;

    /**
     * @param int $fleet_id       ID of the fleet
     * @param int $squad_id       ID of the squad
     * @param RefreshToken $token Token of the character
     */
    public function __construct(int $fleet_id, int $squad_id, RefreshToken $token)
    {
        $this->squad_id = $squad_id;
        parent::__construct($fleet_id, $token);
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'squad_id' => $this->squad_id
        ]);
    }
}