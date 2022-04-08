<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get information on a region
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_regions_region_id
 */
abstract class RegionInformation extends EsiBase
{
    protected $endpoint = '/universe/regions/{region_id}/';

    public $tags = ['public', 'universe'];
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
            'region_id' => $this->getRegionId()
        ]);
    }
}