<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Characters;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Bids extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/contracts/{contract_id}/bids/';

    protected $version = 'v1';

    protected $scope = 'esi-contracts.read_character_contracts.v1';

    public $tags = ['character', 'contract'];

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