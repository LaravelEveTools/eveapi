<?php

namespace LaravelEveTools\EveApi\Jobs\Market;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return a list of prices
 * 
 * https://esi.evetech.net/ui/?version=dev#/Market/get_markets_prices
 */
abstract class Prices extends EsiBase
{
    protected $endpoint = '/markets/prices/';

    public $tags = ['public', 'market'];

}