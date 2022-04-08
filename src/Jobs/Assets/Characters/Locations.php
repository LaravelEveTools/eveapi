<?php

namespace LaravelEveTools\EveApi\Jobs\Assets\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Get the location of assets
 * 
 * https://esi.evetech.net/ui/#/Assets/post_characters_character_id_assets_locations
 */
abstract class Locations extends AbstractAuthCharacterJob
{
    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/assets/locations';

    protected $version = 'v2';

    protected $scope = 'esi-assets.read_assets.v1';

    protected $tags = ['character', 'assets'];
}