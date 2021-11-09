<?php

namespace LaravelEveTools\EveApi\Jobs\PlanetaryInteraction;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Schematics extends EsiBase
{

    protected $endpoint = '/universe/schematics/{schematic_id}/';

    public $tags = ['public', 'planetary interaction'];

    public function __construct(int $schematic_id)
    {
        $this->schematic_id = $schematic_id;
    }

    /**
     * @return int
     */
    public function getSchematicId(): int
    {
        return $this->schematic_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'schematic_id' => $this->getSchematicId()
        ]);
    }

}