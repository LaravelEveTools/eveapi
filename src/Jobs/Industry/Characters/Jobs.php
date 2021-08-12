<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Jobs extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/industry/jobs/';

    protected $scope = 'esi-industry.read_character_jobs';

    public $tags = ['industry'];


}