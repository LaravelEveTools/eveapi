<?php

namespace LaravelEveTools\EveApi\Jobs\Sovereignty;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Shows sovereignty information for solar systems
 * 
 * https://esi.evetech.net/ui/?version=latest#/Sovereignty/get_sovereignty_map
 */
abstract class Map extends EsiBase
{

    protected $endpoint = '/sovereignty/map/';

    protected $tags = ['public', 'sovereignty'];

}