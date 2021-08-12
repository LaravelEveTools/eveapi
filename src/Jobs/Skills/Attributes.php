<?php

namespace LaravelEveTools\EveApi\Jobs\Skills;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Attributes extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/attributes/';

    protected $scope = 'esi-skills.read_skills.v1';

    public $tags = ['skills'];

}