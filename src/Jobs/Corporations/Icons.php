<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCorporationJob;

abstract class Icons extends AbstractCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/icons/';

    protected $version = 'v3';

    public $tags = ['public', 'corporation'];
}