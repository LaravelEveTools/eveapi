<?php

namespace LaravelEveTools\EveApi\Jobs\Wars;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return a list of wars
 * 
 * https://esi.evetech.net/ui/?version=latest#/Wars/get_wars
 */
abstract class Wars extends EsiBase
{

    protected $endpoint = '/wars/';

    public $tags = ['public', 'war'];
}