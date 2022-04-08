<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of constellations
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_constellations
 */
abstract class Constellations extends EsiBase
{

    protected $endpoint = '/universe/constellations/';

    public $tags = ['public', 'universe'];
}