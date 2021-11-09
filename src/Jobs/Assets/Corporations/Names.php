<?php

namespace LaravelEveTools\EveApi\Jobs\Assets\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Names extends AbstractAuthCorporationJob
{
    protected $method = 'post';

    protected $endpoint = '/corporations/{corporation_id}/names';

    protected $version = 'v1';

    protected $scope = 'esi-assets.read_corporation_assets.v1';

    protected $tags = ['corporation', 'assets'];

}