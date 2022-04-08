<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Returns contracts available to a character, only if the character is issuer, 
 * acceptor or assignee. Only returns contracts no older than 30 days, or if 
 * the status is "in_progress".
 * 
 *  https://esi.evetech.net/ui/#/Contracts/get_characters_character_id_contracts
 */
abstract class Contracts extends AbstractAuthCharacterJob
{
    protected $method = 'GET';

    protected $endpoint = '/characters/{character_id}/contracts/';

    protected $version = 'v1';

    protected $scope = 'esi-contracts.read_character_contracts.v1';

    public $tags = ['character', 'contract'];

    public $page = 1;
}