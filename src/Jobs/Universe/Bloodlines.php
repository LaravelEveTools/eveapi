<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of bloodlines
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_bloodlines
 */
abstract class Bloodlines extends EsiBase
{

    protected $endpoint = '/universe/bloodlines/';

    public $tags = ['public', 'universe'];
}