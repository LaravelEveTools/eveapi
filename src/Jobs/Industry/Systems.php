<?php

namespace LaravelEveTools\EveApi\Jobs\Industry;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return cost indices for solar systems
 * 
 * https://esi.evetech.net/ui/?version=dev#/Industry/get_industry_systems
 */
abstract class Systems extends EsiBase
{

    protected $endpoint = '/industry/systems/';

    protected $version = 'v1';

    public $tags = ['public', 'industry'];


}