<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Returns contracts available to a corporation, only if the corporation is issuer, 
 * acceptor or assignee. Only returns contracts no older than 30 days, or if 
 * the status is "in_progress".
 * 
 * https://esi.evetech.net/ui/#/Contracts/get_corporations_corporation_id_contracts
 */
abstract class Contracts extends AbstractAuthCharacterJob
{
    protected $method = 'GET';

    protected $endpoint = '/corporations/{corporation_id}/contracts/';

    protected $version = 'v1';

    protected $scope = 'esi-contracts.read_corporation_contracts.v1';

    protected $tags = ['corporation', 'contract'];

    protected $page = 1;


}