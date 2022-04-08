<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of item groups
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_groups
 */
abstract class Groups extends EsiBase
{

    protected $endpoint = '/universe/groups/';

    protected $tags = ['public', 'universe'];


}