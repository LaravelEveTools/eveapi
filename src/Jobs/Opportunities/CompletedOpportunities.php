<?php

namespace LaravelEveTools\EveApi\Jobs\Opportunities;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return a list of tasks finished by a character
 * 
 * https://esi.evetech.net/ui/?version=dev#/Opportunities/get_characters_character_id_opportunities
 */
abstract class CompletedOpportunities extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/opportunities/';

    protected $version = 'v1';

    protected $scope = 'esi-characters.read_opportunities.v1';

    protected $tags = ['opportunities'];
}