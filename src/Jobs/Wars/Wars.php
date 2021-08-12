<?php

namespace LaravelEveTools\EveApi\Jobs\Wars;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Wars extends EsiBase
{

    protected $endpoint = '/wars/';

    public $tags = ['public', 'war'];
}