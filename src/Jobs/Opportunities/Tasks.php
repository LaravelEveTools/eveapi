<?php

namespace LaravelEveTools\EveApi\Jobs\Opportunities;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Tasks extends EsiBase
{

    protected $endpoint = '/opportunities/tasks/';

    public $tags = ['opportunities'];



}