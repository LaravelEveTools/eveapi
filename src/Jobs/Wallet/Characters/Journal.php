<?php

namespace LaravelEveTools\EveApi\Jobs\Wallet\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Journal extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/wallet/journal/';

    protected $version = 'v6';

    protected $scope = 'esi-wallet.read_character_wallet.v1';

    public $tags = ['wallet'];

    protected $page = 1;

}