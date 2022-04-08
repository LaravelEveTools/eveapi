<?php


namespace LaravelEveTools\EveApi\Jobs\Alliance;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;


/**
 * Get the ID of all alliances in EVE
 * 
 * https://esi.evetech.net/ui/#/Alliance/get_alliances
 */
abstract class Alliances extends EsiBase
{

    protected $method = 'get';

    protected $endpoint = '/alliances/';

    protected $version = 'v2';

    protected $tags = ['public', 'alliance'];


}