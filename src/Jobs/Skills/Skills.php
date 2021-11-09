<?php

namespace LaravelEveTools\EveApi\Jobs\Skills;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Skills extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/skills/';

    protected $version = 'v2';

    protected $scope = 'esi-skills.read_skills.v1';


}