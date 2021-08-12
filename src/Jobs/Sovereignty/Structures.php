<?php

namespace LaravelEveTools\EveApi\Jobs\Sovereignty;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Structures extends EsiBase
{

    protected $endpoint = '/sovereignty/structures/';

    public $tags = ['public', 'sovereignty'];

}