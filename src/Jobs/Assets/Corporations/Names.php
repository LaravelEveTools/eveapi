<?php

namespace LaravelEveTools\EveApi\Jobs\Assets\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Gets the names of corporation assets.
 * 
 * https://esi.evetech.net/ui/#/Assets/post_corporations_corporation_id_assets_names
 */
abstract class Names extends AbstractAuthCorporationJob
{
    protected $method = 'post';

    protected $endpoint = '/corporations/{corporation_id}/names';

    protected $version = 'v1';

    protected $scope = 'esi-assets.read_corporation_assets.v1';

    protected $tags = ['corporation', 'assets'];

}