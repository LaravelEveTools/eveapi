<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Return the current shareholders of a corporation.
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_shareholders
 */
abstract class Shareholders extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/shareholders/';

    protected $scope = 'esi-corporations.read_corporation_wallets.v1';

    protected $version = 'v1';

    protected $page = 1;

    public $tags = ['corporation'];
}