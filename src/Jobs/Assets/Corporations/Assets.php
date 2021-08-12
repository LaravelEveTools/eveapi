<?php

namespace LaravelEveTools\EveApi\Jobs\Assets\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Assets extends AbstractAuthCorporationJob
{

    protected $method = 'get';

    protected $endpoint = '/corporations/{corporation_id}/assets';

    protected $version = 'v5';

    protected $scope = 'esi-assets.read_corporation_assets.v1';

    protected $tags = ['corporation', 'assets'];

    protected $page = 1;

}