<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class ConsteallationInformation extends EsiBase
{
    protected $endpoint = '/universe/constellations/{constellation_id}/';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $constellation_id;

    public function __construct(int $constellation_id)
    {
        $this->constellation_id = $constellation_id;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->constellation_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'constellation_id' => $this->getCategoryId()
        ]);
    }
}