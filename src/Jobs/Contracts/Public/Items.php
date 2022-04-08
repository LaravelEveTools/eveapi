<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Pub;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Lists items of a public contract
 * 
 * https://esi.evetech.net/ui/#/Contracts/get_contracts_public_items_contract_id
 */
abstract class Items extends EsiBase
{
    protected $method = 'GET';

    protected $endpoint = '/contracts/public/items/{contract_id}/';

    protected $version = 'v1';

    public $tags = ['public', 'contract'];

    /**
     * @var int
     */
    private $contract_id;

    public function __construct(int $contract_id)
    {
        $this->contract_id = $contract_id;
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'contract_id' => $this->contract_id
        ]);
    }
}