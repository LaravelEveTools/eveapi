<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class SystemJumps extends EsiBase
{

    protected $endpoint = '/universe/system_jumps/';

    public $tags = ['public', 'universe'];


}