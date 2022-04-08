<?php

namespace LaravelEveTools\EveApi\Jobs\Wallet\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Get a corporation’s wallets
 * 
 * https://esi.evetech.net/ui/?version=latest#/Wallet/get_corporations_corporation_id_wallets
 */
abstract class Balance extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporations_id}/wallet/';

    protected $scope = 'esi-wallet.read_corporation_wallet.v1';

    public $tags = ['wallet'];


}