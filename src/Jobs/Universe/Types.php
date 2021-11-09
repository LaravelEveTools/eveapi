<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Types extends EsiBase
{

    protected $endpoint = '/universe/types/';


    public $tags = ['public', 'universe'];

    protected $page = 1;


}