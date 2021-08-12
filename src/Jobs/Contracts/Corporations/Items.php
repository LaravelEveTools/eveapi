<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Corporations;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Items extends AbstractAuthCharacterJob
{

    protected $endpoint = '/corporations/{corporation_id}/contracts/{contract_id}/items/';

    protected $version = 'v1';

    protected $scope = 'esi-contracts.read_corporation_contracts.v1';

    public $tags = ['corporation', 'contract'];

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