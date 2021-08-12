<?php

namespace LaravelEveTools\EveApi\Jobs\Fittings;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class CreateFitting extends AbstractAuthCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/fittings/';

    protected $version = 'v2';

    protected $scope = 'es-fittings.read_fittings.v1';

    public $tags = ['fitting'];
}