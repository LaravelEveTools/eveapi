<?php

namespace LaravelEveTools\EveApi\Jobs\Market;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Groups extends EsiBase
{
    protected $endpoint = '/markets/groups/';

    public $tags = ['public', 'market'];

}