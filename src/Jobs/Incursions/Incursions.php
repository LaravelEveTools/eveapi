<?php

namespace LaravelEveTools\EveApi\Jobs\Incursions;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Incursions extends EsiBase
{

    protected $endpoint = '/incursions/';

    public $tags = ['public', 'incursions'];
}