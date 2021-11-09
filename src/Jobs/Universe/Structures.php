<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Structures extends EsiBase
{

    protected $endpoint = '/universe/structures/';

    public $tags = ['public', 'universe'];


}