<?php

namespace LaravelEveTools\EveApi\Jobs\Routes;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;


/**
 * Get the systems between origin and destination
 * 
 * https://esi.evetech.net/ui/?version=dev#/Routes/get_route_origin_destination
 */
abstract class Route extends EsiBase
{


    protected $endpoint = '/route/{origin}/{destination}/';

    public $tags = ['route'];
    /**
     * @var int
     */
    private $origin;

    private $destination;


    public function __construct(int $origin, int $destination)
    {
        $this->origin = $origin;
        $this->destination = $destination;
    }

    /**
     * @return int
     */
    public function getOrigin(): int
    {
        return $this->origin;
    }

    /**
     * @return int
     */
    public function getDestination(): int
    {
        return $this->destination;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'origin' => $this->getOrigin(),
            'destination' => $this->getDestination(),
        ]);
    }
}