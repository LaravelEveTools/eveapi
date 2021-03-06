<?php

namespace LaravelEveTools\EveApi\Jobs\Assets\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Get coporation asset Locations
 * 
 * https://esi.evetech.net/ui/#/Assets/post_corporations_corporation_id_assets_locations
 */
abstract class Locations extends AbstractAuthCorporationJob
{
    protected $method = 'post';

    protected $endpoint = '/corporations/{corporation_id}/locations';

    protected $version = 'v2';

    protected $scope = 'esi-assets.read_corporation_assets.v1';

    protected $tags = ['corporation', 'assets'];
}