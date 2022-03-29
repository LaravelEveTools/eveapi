<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class SystemKills extends EsiBase
{

    public $method = 'get';

    public $endpoint = '/universe/system_kills/';

    public $version = 'v2';

    public $tags = ['public', 'universe'];


}