<?php

namespace LaravelEveTools\EveApi\Jobs\Assets\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Names extends AbstractAuthCharacterJob
{
    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/assets/names';

    protected $version = 'v1';

    protected $scope = 'esi-assets.read_assets.v1';

    protected $tags = ['character', 'assets'];
}