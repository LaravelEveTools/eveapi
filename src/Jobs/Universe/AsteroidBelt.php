<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get information on an asteroid belt
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_asteroid_belts_asteroid_belt_id
 */
abstract class AsteroidBelt extends EsiBase
{

    protected $endpoint = '/universe/asteroid_belts/{asteroid_belt_id}/';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $asteroid_belt_id;

    public function __construct(int $asteroid_belt_id)
    {
        $this->asteroid_belt_id = $asteroid_belt_id;
    }

    /**
     * @return int
     */
    public function getAsteroidBeltId(): int
    {
        return $this->asteroid_belt_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'asteroid_belt_id' => $this->getAsteroidBeltId()
        ]);
    }
}