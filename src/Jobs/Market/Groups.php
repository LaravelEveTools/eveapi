<?php

namespace LaravelEveTools\EveApi\Jobs\Market;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of item groups
 * 
 * https://esi.evetech.net/ui/?version=dev#/Market/get_markets_groups
 */
abstract class Groups extends EsiBase
{
    protected $endpoint = '/markets/groups/';

    public $tags = ['public', 'market'];

}