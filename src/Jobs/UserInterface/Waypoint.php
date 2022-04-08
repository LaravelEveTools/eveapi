<?php

namespace LaravelEveTools\EveApi\Jobs\UserInterface;

use LaravelEveTools\EveApi\Events\UserInterface\WaypointSet;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthedJob;
use LaravelEveTools\EveApi\Models\RefreshToken;


/**
 * Set a solar system as autopilot waypoint
 * 
 * https://esi.evetech.net/ui/?version=latest#/User%20Interface/post_ui_autopilot_waypoint
 */
class Waypoint extends AbstractAuthedJob
{

    protected $method = 'post';

    protected $endpoint = '/ui/autopilot/waypoint/';

    protected $scope = 'esi-ui.write_waypoint.v1';

    protected $version = 'v2';

    public $tags = ['ui'];


    /**
     * @var int
     */
    public $destination_id;
    /**
     * @var bool
     */
    public $clear_other_waypoints;
    /**
     * @var bool
     */
    public $add_to_beginning;


    public function __construct(RefreshToken $token, int $destination_id, bool $clearWaypoints = false, bool $addToBeginning = false)
    {
        $this->destination_id = $destination_id;
        $this->clear_other_waypoints = $clearWaypoints;
        $this->add_to_beginning = $addToBeginning;
        parent::__construct($token);
    }

    /**
     * @throws \Seat\Eseye\Exceptions\InvalidContainerDataException
     * @throws \Seat\Eseye\Exceptions\RequestFailedException
     * @throws \LaravelEveTools\EveApi\Exceptions\UnavailableEveServerException
     * @throws \App\Exceptions\TemporaryEsiOutageException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \LaravelEveTools\EveApi\Exceptions\PermanentInvalidTokenException
     * @throws \Seat\Eseye\Exceptions\InvalidAuthenticationException
     */
    public function handle()
    {

        $this->query_string['destination_id'] = $this->destination_id;
        $this->query_string['clear_other_waypoints'] = $this->clear_other_waypoints;
        $this->query_string['add_to_beginning'] = $this->add_to_beginning;

        $result = $this->retrieve();
    }

}