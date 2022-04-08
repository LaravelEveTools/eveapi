<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * List all public structures
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_structures
 */
abstract class Structures extends EsiBase
{

    protected $endpoint = '/universe/structures/';

    public $tags = ['public', 'universe'];


}