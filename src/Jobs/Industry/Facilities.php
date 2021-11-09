<?php

namespace LaravelEveTools\EveApi\Jobs\Industry;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Facilities extends EsiBase
{

    protected $endpoint = '/industry/facilities/';

    public $tags = ['public', 'industry'];
}