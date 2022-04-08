<?php

namespace LaravelEveTools\EveApi\Jobs\Wallet\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Get wallet transactions of a character
 * 
 * https://esi.evetech.net/ui/?version=latest#/Wallet/get_characters_character_id_wallet_transactions
 */
abstract class Transactions extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/wallet/transactions/';


    protected $scope = 'esi-wallet.read_character_wallet.v1';

    public $tags = ['wallet'];

}