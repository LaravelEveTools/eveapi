<?php

namespace LaravelEveTools\EveApi\Jobs\Market\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * List cancelled and expired market orders placed on behalf of a corporation up to 90 days in the past.\
 * 
 * https://esi.evetech.net/ui/?version=dev#/Market/get_corporations_corporation_id_orders_history
 */
abstract class History extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/orders/history/';

    protected $scope = 'esi-markets.read_corporation_orders.v1';

    protected $version = 'v2';

    public $tags = ['characters', 'market'];
}