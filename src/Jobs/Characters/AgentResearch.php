<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class AgentResearch extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/agents_research';

    protected $scope = 'esi-character.read_agents_research.v1';

    protected $version = 'v2';

    protected $tags = ['character'];

}