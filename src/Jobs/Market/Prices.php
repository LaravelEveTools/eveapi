<?php

namespace LaravelEveTools\EveApi\Jobs\Market;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Prices extends EsiBase
{
    protected $endpoint = '/markets/prices/';

    public $tags = ['public', 'market'];

}