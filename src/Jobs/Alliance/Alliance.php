<?php

namespace LaravelEveTools\EveApi\Jobs\Alliance;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAllianceJob;

/**
 * Get the details of a specific alliance
 * 
 * https://esi.evetech.net/ui/#/Alliance/get_alliances_alliance_id
 */
abstract class Alliance extends AbstractAllianceJob
{
    protected $method = 'get';

    protected $endpoint = '/alliances/{alliance_id}/';

    protected $version = 'v4';

    protected $tags = ['public', 'alliance'];


}