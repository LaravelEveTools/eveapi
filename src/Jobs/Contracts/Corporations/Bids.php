<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Corporations;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Lists bids on a particular auction contract
 * This endpoint is paged
 * 
 * https://esi.evetech.net/ui/#/Contracts/get_corporations_corporation_id_contracts_contract_id_bids
 */
abstract class Bids extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/contracts/{contract_id}/bids/';

    protected $version = 'v1';

    protected $scope = 'esi-contracts.read_corporation_contracts.v1';

    public $tags = ['corporation', 'contract'];

    protected $page = 1;

    protected $contract_id;

    public function __construct(int $contract_id, int $corporation_id, RefreshToken $token)
    {
        $this->contract_id = $contract_id;
        parent::__construct($corporation_id, $token);
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'contract_id' => $this->contract_id
        ]);
    }

}