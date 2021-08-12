<?php

namespace LaravelEveTools\EveApi\Jobs\Alliance;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAllianceJob;

abstract class Corporations extends AbstractAllianceJob
{

    protected $method = 'get';

    protected $endpoint = '/alliances/{alliance_id}/corporations/';

    protected $version = 'v2';

    protected $tags = ['public', 'alliance'];
}