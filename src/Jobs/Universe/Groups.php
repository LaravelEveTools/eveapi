<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Groups extends EsiBase
{

    protected $endpoint = '/universe/groups/';

    public $tags = ['public', 'universe'];


}