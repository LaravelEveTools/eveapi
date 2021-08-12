<?php

namespace LaravelEveTools\EveApi\Jobs\Wallet\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Transactions extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/wallet/transactions/';


    protected $scope = 'esi-wallet.read_character_wallet.v1';

    public $tags = ['wallet'];

}