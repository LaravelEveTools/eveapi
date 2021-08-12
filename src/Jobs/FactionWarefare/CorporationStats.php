<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class CorporationStats extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/fw/stats/';

    protected $version = 'v2';


}