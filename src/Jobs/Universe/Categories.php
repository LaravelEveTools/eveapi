<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Categories extends EsiBase
{

    protected $endpoint = '/universe/categories/';

    public $tags = ['public', 'universe'];
}