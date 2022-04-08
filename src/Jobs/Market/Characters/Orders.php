<?php

namespace LaravelEveTools\EveApi\Jobs\Market\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * List open market orders placed by a character
 * 
 * https://esi.evetech.net/ui/?version=dev#/Market/get_characters_character_id_orders
 */
abstract class Orders extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/orders/';

    protected $scope = 'esi-markets.read_character_orders.v1';

    protected $version = 'v2';

    public $tags = ['character', 'market'];
}