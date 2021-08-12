<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCharacterJob;

abstract class Affiliation extends AbstractCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/affiliation/';

    protected $version = 'v2';

}