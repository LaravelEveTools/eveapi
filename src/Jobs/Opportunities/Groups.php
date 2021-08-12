<?php

namespace LaravelEveTools\EveApi\Jobs\Opportunities;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Groups extends EsiBase
{

    protected $endpoint = '/opportunities/groups/';

    public $tags = ['opportunities'];



}