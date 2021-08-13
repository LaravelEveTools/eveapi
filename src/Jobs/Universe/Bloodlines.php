<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Bloodlines extends EsiBase
{

    protected $endpoint = '/universe/bloodlines/';

    public $tags = ['public', 'universe'];
}