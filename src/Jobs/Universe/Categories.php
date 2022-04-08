<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of item categories
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_categories
 */
abstract class Categories extends EsiBase
{

    protected $endpoint = '/universe/categories/';

    public $tags = ['public', 'universe'];
}