<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

abstract class KickMember extends AbstractFleetJob
{

    protected $method = 'delete';

    protected $endpoint = '/fleets/{fleet_id}/members/{member_id}/';

    protected $scope = 'esi-fleets.write_fleet.v1';

    /**
     * @var int
     */
    private $member_id;


    /**
     * @param int $fleet_id     ID of the fleet
     * @param int $member_id    ID of the fleet member
     * @param RefreshToken $token Token of the character doing the kicking
     */
    public function __construct(int $fleet_id, int $member_id, RefreshToken $token)
    {
        $this->member_id = $member_id;
        parent::__construct($fleet_id, $token);
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'member_id' => $this->member_id
        ]);
    }

}