<?php

namespace LaravelEveTools\EveApi\Jobs\Wallet\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Retrieve the given character’s wallet journal going 30 days back
 * 
 * https://esi.evetech.net/ui/?version=latest#/Wallet/get_characters_character_id_wallet_journal
 */
abstract class Journal extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/wallet/journal/';

    protected $version = 'v6';

    protected $scope = 'esi-wallet.read_character_wallet.v1';

    public $tags = ['wallet'];

    protected $page = 1;

}