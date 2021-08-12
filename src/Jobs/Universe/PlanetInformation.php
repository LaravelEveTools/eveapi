<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class PlanetInformation extends EsiBase
{
    protected $endpoint = '/universe/planets/{planet_id}/';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $planet_id;

    public function __construct(int $planet_id)
    {
        $this->planet_id = $planet_id;
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
            'planet_id' => $this->getPlanetId()
        ]);
    }
}