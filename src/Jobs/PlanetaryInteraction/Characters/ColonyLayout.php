<?php

namespace LaravelEveTools\EveApi\Jobs\PlanetaryInteraction\Characters;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Returns full details on the layout of a single planetary colony, including links, pins and routes. 
 * Note: Planetary information is only recalculated when the colony is viewed through the client. 
 * Information will not update until this criteria is met.
 * 
 * https://esi.evetech.net/ui/?version=dev#/Planetary%20Interaction/get_characters_character_id_planets_planet_id
 */
abstract class ColonyLayout extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/planets/{planet_id}/';

    protected $version = 'v3';

    protected $scope = 'esi-planets.manage_planets.v1';

    public $tags = ['planetary interaction'];
    /**
     * @var int
     */
    private $planet_id;

    public function __construct(int $planet_id, RefreshToken $token)
    {
        $this->planet_id = $planet_id;
        parent::__construct($token);
    }

    /**
     * @return int
     */
    public function getPlanetId(): int
    {
        return $this->planet_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'planet_id' => $this->getPlanetId(),
        ]);
    }
}