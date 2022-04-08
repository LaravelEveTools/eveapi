<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of regions
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_regions
 */
abstract class Regions extends EsiBase
{

    protected $endpoint = '/universe/regions/';

    public $tags = ['public', 'universe'];


}