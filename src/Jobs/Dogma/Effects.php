<?php

namespace LaravelEveTools\EveApi\Jobs\Dogma;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of dogma effect ids
 * 
 * https://esi.evetech.net/ui/#/Dogma/get_dogma_effects
 */
abstract class Effects extends EsiBase
{

    protected $endpoint = '/dogma/effects/';

    public $tags = ['public', 'dogma'];

}