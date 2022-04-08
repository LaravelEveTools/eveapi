<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Top 10 leaderboard of corporations for kills and victory points separated by total, last week and yesterday
 * 
 * https://esi.evetech.net/ui/#/Faction%20Warfare/get_fw_leaderboards_corporations
 */
abstract class CorporationsLeaderboard extends EsiBase
{

    protected $endpoint = '/fw/leaderboards/corporations/';

    protected $version = 'v2';

}