<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class SystemKills extends EsiBase
{

    protected $endpoint = '/universe/system_kills/';

    protected $version = 'v2';

    public $tags = ['public', 'universe'];


}