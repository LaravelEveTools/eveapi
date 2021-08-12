<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class UniverseIds extends EsiBase
{

    protected $method = 'post';

    protected $endpoint = '/universe/ids/';

    public $tags = ['public', 'universe'];
}