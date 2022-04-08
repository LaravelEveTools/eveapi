<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Pub;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Returns a paginated list of all public contracts in the given region
 * 
 * https://esi.evetech.net/ui/#/Contracts/get_contracts_public_region_id
 */
abstract class Contracts extends EsiBase
{
    protected $method = 'GET';

    protected $endpoint = '/contracts/public/{region_id}/';

    protected $version = 'v1';

    protected $page = 1;

    public $tags = ['public', 'contract'];
    /**
     * @var int
     */
    private $region_id;


    public function __construct(int $region_id)
    {
        $this->region_id = $region_id;
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'region_id' => $this->region_id,
        ]);
    }

}