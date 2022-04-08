<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Data about which NPC factions are at war
 * 
 * https://esi.evetech.net/ui/#/Faction%20Warfare/get_fw_wars
 */
abstract class Wars extends EsiBase
{

    protected $endpoint = '/fw/wars/';

    protected $version = 'v3';
}