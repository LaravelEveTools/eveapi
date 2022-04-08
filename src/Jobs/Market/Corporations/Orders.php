<?php

namespace LaravelEveTools\EveApi\Jobs\Market\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * List open market orders placed on behalf of a corporation
 * 
 * https://esi.evetech.net/ui/?version=dev#/Market/get_corporations_corporation_id_orders
 */
abstract class Orders extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/orders/';

    protected $scope = 'esi-markets.read_corporation_orders.v1';

    protected $version = 'v3';

    protected $tags = ['corporation', 'market'];
}