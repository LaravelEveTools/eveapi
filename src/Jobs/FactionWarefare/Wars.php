<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Wars extends EsiBase
{

    protected $endpoint = '/fw/wars/';

    protected $version = 'v3';
}