<?php

namespace LaravelEveTools\EveApi\Jobs\Wallet\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Balance extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/wallet/';

    protected $scope = 'esi-wallet.read_character_wallet.v1';

    public $tags = ['wallet'];



}