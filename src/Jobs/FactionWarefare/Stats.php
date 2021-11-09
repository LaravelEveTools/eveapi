<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Stats extends EsiBase
{

    protected $endpoint = '/fw/stats/';

    protected $version = 'v2';

}