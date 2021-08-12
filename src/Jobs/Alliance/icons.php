<?php

namespace LaravelEveTools\EveApi\Jobs\Alliance;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAllianceJob;

abstract class icons extends AbstractAllianceJob
{

    protected $method = 'get';

    protected $endpoint = '/alliances/{alliance_id}/icons/';

    protected $version = 'v1';

    protected $tags = ['public', 'alliance'];
}