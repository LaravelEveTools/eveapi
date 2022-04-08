<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of factions
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_factions
 */
abstract class Factions extends EsiBase
{

    protected $endpoint = '/universe/factions/';

    protected $tags = ['public', 'universe'];

    protected $version = 'v2';
}