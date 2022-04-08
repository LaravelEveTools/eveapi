<?php

namespace LaravelEveTools\EveApi\Jobs\Opportunities;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return a list of opportunities groups
 * 
 * https://esi.evetech.net/ui/?version=dev#/Opportunities/get_opportunities_groups
 */
abstract class Groups extends EsiBase
{

    protected $endpoint = '/opportunities/groups/';

    protected $version = 'v1';

    public $tags = ['opportunities'];



}