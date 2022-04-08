<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Pub;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Lists bids on a public auction contract
 * 
 * https://esi.evetech.net/ui/#/Contracts/get_contracts_public_bids_contract_id
 */
abstract class Bids extends EsiBase
{
    protected $endpoint = '/contracts/public/bids/{contract_id}/';

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