<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Contracts extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/contracts/';

    protected $version = 'v1';

    protected $scope = 'esi-contracts.read_character_contracts.v1';

    public $tags = ['character', 'contract'];

    public $page = 1;
}