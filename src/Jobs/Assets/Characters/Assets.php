<?php

namespace LaravelEveTools\EveApi\Jobs\Assets\Characters;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Assets extends AbstractAuthCharacterJob
{

    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/assets';

    protected $version = 'v5';

    protected $scope = 'esi-assets.read_assets.v1';

    protected $tags = ['character', 'assets'];

    protected $page = 1;

}