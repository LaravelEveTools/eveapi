<?php

namespace LaravelEveTools\EveApi\Jobs\Loyalty;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCorporationJob;

abstract class Offers extends AbstractCorporationJob
{

    protected $endpoint = '/loyalty/stores/{corporation_id}/offers/';

    public $tags = ['public', 'loyalty'];
}