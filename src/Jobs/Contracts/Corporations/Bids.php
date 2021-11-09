<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Corporations;

use App\Models\RefreshToken;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Bids extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/contracts/{contract_id}/bids/';

    protected $version = 'v1';

    protected $scope = 'esi-contracts.read_corporation_contracts.v1';

    public $tags = ['corporation', 'contract'];

    protected $page = 1;

    protected $contract_id;

    public function __construct(int $contract_id, RefreshToken $token)
    {
        $this->contract_id = $contract_id;
        parent::__construct($token);
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'contract_id' => $this->contract_id
        ]);
    }

}