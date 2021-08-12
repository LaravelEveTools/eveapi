<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Regions extends EsiBase
{

    protected $endpoint = '/universe/regions/';

    public $tags = ['public', 'universe'];


}