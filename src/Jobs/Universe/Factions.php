<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Factions extends EsiBase
{

    protected $endpoint = '/universe/factions/';

    public $tags = ['public', 'universe'];

    protected $version = 'v2';
}