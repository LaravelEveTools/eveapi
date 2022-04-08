<?php

namespace LaravelEveTools\EveApi\Jobs\Sovereignty;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Shows sovereignty data for campaigns.
 * 
 * https://esi.evetech.net/ui/?version=latest#/Sovereignty/get_sovereignty_campaigns
 */
abstract class Campaigns extends EsiBase
{

    protected $endpoint = '/sovereignty/campaigns/';

    protected $version = 'v1';

    protected $tags = ['public', 'sovereignty'];

}