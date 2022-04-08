<?php

namespace LaravelEveTools\EveApi\Jobs\Incursions;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return a list of current incursions
 * 
 * https://esi.evetech.net/ui/?version=dev#/Incursions/get_incursions
 */
abstract class Incursions extends EsiBase
{

    protected $endpoint = '/incursions/';

    protected $version = 'v1';

    public $tags = ['public', 'incursions'];
}