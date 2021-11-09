<?php

namespace LaravelEveTools\EveApi\Jobs\Industry;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Systems extends EsiBase
{

    protected $endpoint = '/industry/systems/';

    public $tags = ['public', 'industry'];


}