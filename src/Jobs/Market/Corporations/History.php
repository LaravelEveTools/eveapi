<?php

namespace LaravelEveTools\EveApi\Jobs\Market\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class History extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/orders/history/';

    protected $scope = 'esi-markets.read_corporation_orders.v1';

    protected $version = 'v2';

    public $tags = ['market'];
}