<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Shareholders extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/shareholders/';

    protected $scope = 'esi-corporations.read_corporation_wallets.v1';

    protected $version = 'v1';

    protected $page = 1;

    public $tags = ['corporation'];
}