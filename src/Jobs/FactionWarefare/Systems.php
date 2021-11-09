<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Systems extends EsiBase
{

    protected $endpoint = '/fw/systems/';

    protected $version = 'v3';


}