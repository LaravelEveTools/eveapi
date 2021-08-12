<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCorporationJob;

abstract class Corporation extends AbstractCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/';

    protected $version = 'v5';

    public $tags = ['public', 'corporation'];

}