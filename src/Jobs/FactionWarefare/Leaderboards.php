<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Top 4 leaderboard of factions for kills and victory points separated by total, last week and yesterday
 * 
 * https://esi.evetech.net/ui/#/Faction%20Warfare/get_fw_leaderboards
 */
abstract class Leaderboards extends EsiBase
{

    protected $endpoint = '/fw/leaderboards/';

    protected $version = 'v2';
}