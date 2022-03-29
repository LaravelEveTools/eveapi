<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class SystemJumps extends EsiBase
{

    public $method = 'get';

    public $endpoint = '/universe/system_jumps/';

    public $tags = ['public', 'universe'];

    public $version = 'v1';


}