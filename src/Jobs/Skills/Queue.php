<?php

namespace LaravelEveTools\EveApi\Jobs\Skills;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Queue extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/skillqueue/';

    protected $version = 'v2';

    protected $scope = 'esi-skills.read_skillqueue.v1';


}