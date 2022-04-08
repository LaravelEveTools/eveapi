<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return a list of agents research information for a character. The formula for 
 * finding the current research points with an agent is: 
 * currentPoints = remainderPoints + pointsPerDay * days(currentTime - researchStartDate)
 * 
 * https://esi.evetech.net/ui/#/Character/get_characters_character_id_agents_research
 */
abstract class AgentResearch extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/agents_research';

    protected $scope = 'esi-character.read_agents_research.v1';

    protected $version = 'v2';

    protected $tags = ['character'];

}