<?php

namespace LaravelEveTools\EveApi\Jobs\Fleets;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractFleetJob;

/**
 * Move a fleet member around
 * 
 * https://esi.evetech.net/ui/?version=dev#/Fleets/put_fleets_fleet_id_members_member_id
 */
abstract class MoveMember extends AbstractFleetJob
{

    protected $method = 'put';

    protected $endpoint = '/fleets/{fleet_id}/members/{member_id}';

    protected $scope = 'esi-fleets.write_fleets.v1';

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

    /**
     * @return int
     */
    public function getMemberId(): int
    {
        return $this->member_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'member_id' => $this->getMemberId()
        ]);
    }

}