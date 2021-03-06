<?php

namespace LaravelEveTools\EveApi\Jobs\Market\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * List cancelled and expired market orders placed by a character up to 90 days in the past.
 * 
 * https://esi.evetech.net/ui/?version=dev#/Market/get_characters_character_id_orders_history
 */
abstract class History extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/orders/history/';

    protected $scope = 'esi-markets.read_character_orders.v1';

    protected $version = 'v2';

    public $tags = ['character','market'];

}