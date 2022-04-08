<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCorporationJob;

/**
* @deprecated [1.0] [Eve's image server effectivly makes this job pointless. Visit https://docs.esi.evetech.net/docs/image_server.html for details ]
 * Get the icon urls for a corporation
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_icons
 */
abstract class Icons extends AbstractCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/icons/';

    protected $version = 'v3';

    public $tags = ['public', 'corporation'];
}