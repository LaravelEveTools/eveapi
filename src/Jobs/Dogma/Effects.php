<?php

namespace LaravelEveTools\EveApi\Jobs\Dogma;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Effects extends EsiBase
{

    protected $endpoint = '/dogma/effects/';

    public $tags = ['public', 'dogma'];

}