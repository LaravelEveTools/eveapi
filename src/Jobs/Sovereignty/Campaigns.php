<?php

namespace LaravelEveTools\EveApi\Jobs\Sovereignty;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Campaigns extends EsiBase
{

    protected $endpoint = '/sovereignty/campaigns/';

    public $tags = ['public', 'sovereignty'];

}