<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Statistical overviews of factions involved in faction warfare
 * 
 * https://esi.evetech.net/ui/#/Faction%20Warfare/get_fw_stats
 */
abstract class Stats extends EsiBase
{

    protected $endpoint = '/fw/stats/';

    protected $version = 'v2';

}