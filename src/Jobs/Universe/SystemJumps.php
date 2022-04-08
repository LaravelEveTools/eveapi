<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get the number of jumps in solar systems within the last hour ending at the timestamp 
 * of the Last-Modified header, excluding wormhole space. Only systems with jumps will be listed
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_system_jumps
 */
abstract class SystemJumps extends EsiBase
{

    public $method = 'get';

    public $endpoint = '/universe/system_jumps/';

    public $tags = ['public', 'universe'];

    public $version = 'v1';


}