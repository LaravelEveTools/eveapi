<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Graphics extends EsiBase
{

    protected $endpoint = '/universe/graphics/';

    public $tags = ['public', 'universe'];


}