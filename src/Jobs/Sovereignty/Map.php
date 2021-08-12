<?php

namespace LaravelEveTools\EveApi\Jobs\Sovereignty;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Map extends EsiBase
{

    protected $endpoint = '/sovereignty/map/';

    public $tags = ['public', 'sovereignty'];

}