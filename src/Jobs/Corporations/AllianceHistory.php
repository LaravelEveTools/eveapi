<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCorporationJob;

abstract class AllianceHistory extends AbstractCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/alliancehistory/';

    protected $version = 'v3';

    public $tags  = ['public', 'corporation'];
}