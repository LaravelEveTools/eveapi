<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;


use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCharacterJob;

abstract class Portrait extends AbstractCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/portrait/';

    protected $version = 'v3';
}