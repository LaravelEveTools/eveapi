<?php

namespace LaravelEveTools\EveApi\Jobs\Killmails\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Recent extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/killmails/recent/';

    protected $scope = 'esi-killmails.read_killmails.v1';

    protected $page = 1;
}