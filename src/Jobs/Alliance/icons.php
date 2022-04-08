<?php

namespace LaravelEveTools\EveApi\Jobs\Alliance;

use JetBrains\PhpStorm\Deprecated;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAllianceJob;


/**
 * @deprecated [1.0] [Eve's image server effectivly makes this job pointless. Visit https://docs.esi.evetech.net/docs/image_server.html for details ]
 * Get Icon link for alliance
 * 
 * https://esi.evetech.net/ui/#/Alliance/get_alliances_alliance_id_icons
 * 
 */
abstract class icons extends AbstractAllianceJob
{

    protected $method = 'get';

    protected $endpoint = '/alliances/{alliance_id}/icons/';

    protected $version = 'v1';

    protected $tags = ['public', 'alliance'];
}