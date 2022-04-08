<?php

namespace LaravelEveTools\EveApi\Jobs\Dogma;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get information on a dogma attribute
 * 
 * https://esi.evetech.net/ui/#/Dogma/get_dogma_attributes_attribute_id
 */
abstract class Attributes extends EsiBase
{

    protected $endpoint = '/dogma/attributes/';

    public $tags = ['public', 'dogma'];

}