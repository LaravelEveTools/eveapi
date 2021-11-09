<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class MoonInformation extends EsiBase
{
    protected $endpoint = '/universe/moons/{moon_id}/';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $moon_id;

    public function __construct(int $moon_id)
    {
        $this->moon_id = $moon_id;
    }

    /**
     * @return int
     */
    public function getMoonId(): int
    {
        return $this->moon_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'moon_id' => $this->getMoonId()
        ]);
    }
}