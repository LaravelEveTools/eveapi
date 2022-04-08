<?php

namespace LaravelEveTools\EveApi\Jobs\Opportunities;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return a list of opportunities tasks
 * 
 * https://esi.evetech.net/ui/?version=dev#/Opportunities/get_opportunities_tasks
 */
abstract class Tasks extends EsiBase
{

    protected $endpoint = '/opportunities/tasks/';

    public $tags = ['opportunities'];



}