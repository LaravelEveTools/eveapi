<?php

namespace LaravelEveTools\EveApi\Jobs\Opportunities;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class CompletedOpportunities extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/opportunities/';

    protected $scope = 'esi-characters.read_opportunities.v1';

    public $tags = ['opportunities'];
}