<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of type ids
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_types
 */
abstract class Types extends EsiBase
{

    protected $endpoint = '/universe/types/';

    public $tags = ['public', 'universe'];

    protected $page = 1;


}