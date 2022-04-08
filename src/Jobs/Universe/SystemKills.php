<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get the number of ship, pod and NPC kills per solar system within the last hour 
 * ending at the timestamp of the Last-Modified header, excluding wormhole space. 
 * Only systems with kills will be listed
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_system_kills
 */
abstract class SystemKills extends EsiBase
{

    public $method = 'get';

    public $endpoint = '/universe/system_kills/';

    public $version = 'v2';

    public $tags = ['public', 'universe'];


}