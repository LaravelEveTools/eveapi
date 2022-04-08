<?php

namespace LaravelEveTools\EveApi\Jobs\Industry;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return a list of industry facilities
 * 
 * https://esi.evetech.net/ui/?version=dev#/Industry/get_industry_facilities
 */
abstract class Facilities extends EsiBase
{

    protected $endpoint = '/industry/facilities/';

    protected $version = 'v1';

    public $tags = ['public', 'industry'];
}