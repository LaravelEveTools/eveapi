<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Systems extends EsiBase
{

    protected $endpoint = '/universe/systems/';


    public $tags = ['public', 'universe'];


}