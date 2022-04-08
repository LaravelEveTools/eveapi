<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Characters;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Lists items of a particular contract
 * 
 * https://esi.evetech.net/ui/#/Contracts/get_characters_character_id_contracts_contract_id_items
 */
abstract class Items extends AbstractAuthCharacterJob
{
    protected $method = 'GET';

    protected $endpoint = '/characters/{character_id}/contracts/{contract_id}/items/';

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
        return array_merge(parent::buildUriValues(),[
            'contract_id' => $this->contract_id
        ]);
    }
}