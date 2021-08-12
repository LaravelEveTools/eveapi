<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Npc extends EsiBase
{
    protected $endpoint = '/corporations/npccorps/';

    protected $version = 'v2';

}