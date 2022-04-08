<?php

namespace LaravelEveTools\EveApi\Jobs\Assets\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Get a characters assets ids
 * This API Endpoint is paged.
 * 
 * https://esi.evetech.net/ui/#/Assets/get_characters_character_id_assets
 */
abstract class Assets extends AbstractAuthCharacterJob
{

    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/assets';

    protected $version = 'v5';

    protected $scope = 'esi-assets.read_assets.v1';

    protected $tags = ['character', 'assets'];

    protected $page = 1;

}