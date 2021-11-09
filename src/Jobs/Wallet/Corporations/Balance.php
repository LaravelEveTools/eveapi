<?php

namespace LaravelEveTools\EveApi\Jobs\Wallet\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Balance extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporations_id}/wallet/';

    protected $scope = 'esi-wallet.read_corporation_wallet.v1';

    public $tags = ['wallet'];


}