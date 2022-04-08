<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * An overview of the current ownership of faction warfare solar systems
 * 
 * https://esi.evetech.net/ui/#/Faction%20Warfare/get_fw_systems
 */
abstract class Systems extends EsiBase
{

    protected $endpoint = '/fw/systems/';

    protected $version = 'v3';

}