<?php

namespace LaravelEveTools\EveApi\Jobs\Loyalty;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Points extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/loyalty/points/';

    protected $scope = 'esi-characters.read_loyalty.v1';

    public $tags = ['loyalty'];
}