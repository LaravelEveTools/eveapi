<?php

namespace LaravelEveTools\EveApi\Events\UserInterface;

use Illuminate\Foundation\Events\Dispatchable;
use Seat\Eseye\Containers\EsiResponse;

class WaypointSet
{
    use Dispatchable;

    /**
     * @var int
     */
    public $destination_id;
    /**
     * @var int
     */
    public $clear_other_waypoints;
    /**
     * @var int
     */
    public $add_to_beginning;
    /**
     * @var EsiResponse
     */
    public $result;

    public function __construct(EsiResponse $result, int $destination_id, int $clear_other_waypoints, int $add_to_beginning)
    {
        $this->result = $result;
        $this->destination_id = $destination_id;
        $this->clear_other_waypoints = $clear_other_waypoints;
        $this->add_to_beginning = $add_to_beginning;
    }
}