<?php

namespace LaravelEveTools\EveApi\Jobs\Insurance;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return available insurance levels for all ship types
 * 
 * https://esi.evetech.net/ui/?version=dev#/Insurance/get_insurance_prices
 */
abstract class Prices extends EsiBase
{

    protected $endpoint = '/insurance/prices/';

    public $tags = ['public', 'insurance'];


}