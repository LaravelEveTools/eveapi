<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of solar systems
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_systems
 */
abstract class Systems extends EsiBase
{

    protected $endpoint = '/universe/systems/';


    public $tags = ['public', 'universe'];


}