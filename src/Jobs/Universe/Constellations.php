<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Constellations extends EsiBase
{

    protected $endpoint = '/universe/constellations/';

    public $tags = ['public', 'universe'];
}