<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;


/**
 * Get a list of npc corporations
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_npccorps
 */
abstract class Npc extends EsiBase
{
    protected $endpoint = '/corporations/npccorps/';

    protected $version = 'v2';

}