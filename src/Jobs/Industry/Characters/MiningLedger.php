<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class MiningLedger extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/mining/';

    protected $scope = 'esi-industry.read_character_mining.v1';

    public $tags = ['industry'];

    protected $page = 1;
}