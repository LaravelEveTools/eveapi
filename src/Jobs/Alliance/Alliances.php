<?php

/**
 *
 * Get a list of every Alliance ID in the universe
 */

namespace LaravelEveTools\EveApi\Jobs\Alliance;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Alliances extends EsiBase
{

    protected $method = 'get';

    protected $endpoint = '/alliances/';

    protected $version = 'v2';

    protected $tags = ['public', 'alliance'];


}