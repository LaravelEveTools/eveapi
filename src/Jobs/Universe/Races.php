<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Races extends EsiBase
{

    protected $endpoint = '/universe/races/';

    public $tags = ['public', 'universe'];


}