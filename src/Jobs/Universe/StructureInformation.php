<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class StructureInformation extends EsiBase
{
    protected $endpoint = '/universe/structure/{structure_id}/';

    protected $version = 'v2';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $structure_id;

    public function __construct(int $structure_id)
    {
        $this->structure_id = $structure_id;
    }

    /**
     * @return int
     */
    public function getStructureId(): int
    {
        return $this->structure_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'structure_id' => $this->getStructureId()
        ]);
    }
}