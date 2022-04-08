<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * List industry jobs placed by a character
 * 
 * https://esi.evetech.net/ui/?version=dev#/Industry/get_characters_character_id_industry_jobs
 */
abstract class Jobs extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/industry/jobs/';

    protected $version = 'v1';

    protected $scope = 'esi-industry.read_character_jobs';

    public $tags = ['character', 'industry'];


}