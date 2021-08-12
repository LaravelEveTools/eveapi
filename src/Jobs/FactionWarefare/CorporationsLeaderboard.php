<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class CorporationsLeaderboard extends EsiBase
{

    protected $endpoint = '/fw/leaderboards/corporations/';

    protected $version = 'v2';

}