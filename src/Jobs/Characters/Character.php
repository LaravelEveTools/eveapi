<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCharacterJob;

abstract class Character extends AbstractCharacterJob
{

    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/';

    protected $version = 'v4';

    protected $tags = ['public', 'character'];

}