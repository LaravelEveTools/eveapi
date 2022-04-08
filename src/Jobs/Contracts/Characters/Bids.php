<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Characters;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Lists bids on a particular auction contract
 * 
 * https://esi.evetech.net/ui/#/Contracts/get_characters_character_id_contracts_contract_id_bids
 */
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