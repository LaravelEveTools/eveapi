<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Structures extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/structures/';

    protected $scope = 'esi-corporations.read_structures.v1';

    protected $version = 'v4';

    protected $page = 1;

    public $tags = ['corporation'];
}