<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Leaderboards extends EsiBase
{

    protected $endpoint = '/fw/leaderboards/';

    protected $version = 'v2';
}