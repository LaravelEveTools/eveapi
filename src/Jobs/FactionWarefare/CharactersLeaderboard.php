<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Top 100 leaderboard of pilots for kills and victory points separated by total, last week and yesterday
 * 
 * https://esi.evetech.net/ui/#/Faction%20Warfare/get_fw_leaderboards_characters
 */
abstract class CharactersLeaderboard extends EsiBase
{

    protected $endpoint = '/fw/leaderboards/characters/';

    protected $version = 'v2';

    protected $tags = ['faction-warefare', 'leaderboard', 'character'];

}