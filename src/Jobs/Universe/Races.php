<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of character races
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_races
 */
abstract class Races extends EsiBase
{

    protected $endpoint = '/universe/races/';

    public $tags = ['public', 'universe'];


}