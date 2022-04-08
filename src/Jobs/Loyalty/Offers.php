<?php

namespace LaravelEveTools\EveApi\Jobs\Loyalty;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCorporationJob;

/**
 * Return a list of offers from a specific corporation’s loyalty store
 * 
 * https://esi.evetech.net/ui/?version=dev#/Loyalty/get_loyalty_stores_corporation_id_offers
 */
abstract class Offers extends AbstractCorporationJob
{

    protected $endpoint = '/loyalty/stores/{corporation_id}/offers/';

    protected $version = 'v1';

    protected $tags = ['public', 'loyalty'];
}