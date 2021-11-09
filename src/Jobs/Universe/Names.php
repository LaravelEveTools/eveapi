<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Names extends EsiBase
{
    protected $method = 'post';

    protected $endpoint = '/universe/names/';

    protected $version = 'v3';

    public $tags = ['public', 'universe'];


}