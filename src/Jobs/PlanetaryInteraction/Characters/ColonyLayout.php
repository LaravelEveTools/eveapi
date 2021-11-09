<?php

namespace LaravelEveTools\EveApi\Jobs\PlanetaryInteraction\Characters;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

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