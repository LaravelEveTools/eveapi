<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class CharactersLeaderboard extends EsiBase
{

    protected $endpoint = '/fw/leaderboards/characters/';

    protected $version = 'v2';

}