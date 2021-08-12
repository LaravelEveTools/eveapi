<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class StarInformation extends EsiBase
{
    protected $endpoint = '/universe/stars/{star_id}/';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $star_id;

    public function __construct(int $star_id)
    {
        $this->star_id = $star_id;
    }

    /**
     * @return int
     */
    public function getStarId(): int
    {
        return $this->star_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'star_id' => $this->getStarId()
        ]);
    }
}