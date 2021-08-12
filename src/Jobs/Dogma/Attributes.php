<?php

namespace LaravelEveTools\EveApi\Jobs\Dogma;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Attributes extends EsiBase
{

    protected $endpoint = '/dogma/attributes/';

    public $tags = ['public', 'dogma'];

}