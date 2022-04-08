<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Resolve a set of names to IDs in the following categories: 
 * agents, alliances, characters, constellations, corporations factions, inventory_types, regions, stations, and systems. 
 * Only exact matches will be returned. All names searched for are cached for 12 hours
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/post_universe_ids
 */
abstract class UniverseIds extends EsiBase
{

    protected $method = 'post';

    protected $endpoint = '/universe/ids/';

    public $tags = ['public', 'universe'];
}