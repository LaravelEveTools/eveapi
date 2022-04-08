<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of graphics
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_graphics
 */
abstract class Graphics extends EsiBase
{

    protected $endpoint = '/universe/graphics/';

    protected $version = 'v1';

    public $tags = ['public', 'universe'];


}