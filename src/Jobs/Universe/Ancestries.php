<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get all character ancestries
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_ancestries
 */
abstract class Ancestries extends EsiBase
{

    protected $endpoint = '/universe/ancestries/';

    public $tags = ['public', 'universe'];
}