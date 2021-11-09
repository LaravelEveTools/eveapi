<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCharacterJob;

abstract class CorporateHistory extends AbstractCharacterJob
{

    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/corporationhistory/';

    protected $version = 'v2';

}