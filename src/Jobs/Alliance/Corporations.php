<?php

namespace LaravelEveTools\EveApi\Jobs\Alliance;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAllianceJob;


/**
 * Get  list of corporations in an Alliance
 * 
 * https://esi.evetech.net/ui/#/Alliance/get_alliances_alliance_id_corporations
 */
abstract class Corporations extends AbstractAllianceJob
{

    protected $method = 'get';

    protected $endpoint = '/alliances/{alliance_id}/corporations/';

    protected $version = 'v2';

    protected $tags = ['public', 'alliance'];
}