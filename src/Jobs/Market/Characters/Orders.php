<?php

namespace LaravelEveTools\EveApi\Jobs\Market\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Orders extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/orders/';

    protected $scope = 'esi-markets.read_character_orders.v1';

    protected $version = 'v2';

    public $tags = ['market'];
}