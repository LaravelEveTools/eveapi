<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get information on a station
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_stations_station_id
 */
abstract class StationInformation extends EsiBase
{
    protected $endpoint = '/universe/stations/{station_id}/';

    protected $version = 'v2';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $station_id;

    public function __construct(int $station_id)
    {
        $this->station_id = $station_id;
    }

    /**
     * @return int
     */
    public function getStationId(): int
    {
        return $this->station_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'station_id' => $this->getStationId()
        ]);
    }
}