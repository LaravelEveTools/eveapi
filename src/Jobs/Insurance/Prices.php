<?php

namespace LaravelEveTools\EveApi\Jobs\Insurance;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Prices extends EsiBase
{

    protected $endpoint = '/insurance/prices/';

    public $tags = ['public', 'insurance'];


}