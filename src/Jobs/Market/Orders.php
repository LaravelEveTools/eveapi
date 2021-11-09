<?php

namespace LaravelEveTools\EveApi\Jobs\Market;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Orders extends EsiBase
{
    protected $endpoint = '/markets/{region_id}/orders/';

    public $tags = ['public', 'market'];
    /**
     * @var int
     */
    private $region_id;

    public function __construct(int $region_id)
    {
        $this->region_id = $region_id;
    }

    /**
     * @return int
     */
    public function getRegionId(): int
    {
        return $this->region_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'region_id' => $this->getRegionId(),
        ]);
    }
}