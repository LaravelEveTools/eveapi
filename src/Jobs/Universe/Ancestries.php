<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Ancestries extends EsiBase
{

    protected $endpoint = '/universe/ancestries/';

    public $tags = ['public', 'universe'];
}