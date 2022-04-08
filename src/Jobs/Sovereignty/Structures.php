<?php

namespace LaravelEveTools\EveApi\Jobs\Sovereignty;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Shows sovereignty data for structures.
 * 
 * https://esi.evetech.net/ui/?version=latest#/Sovereignty/get_sovereignty_structures
 */
abstract class Structures extends EsiBase
{

    protected $endpoint = '/sovereignty/structures/';

    public $tags = ['public', 'sovereignty'];

}