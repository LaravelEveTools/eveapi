<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Paginated record of all mining done by a character for the past 30 days
 * 
 * https://esi.evetech.net/ui/?version=dev#/Industry/get_characters_character_id_mining
 */
abstract class MiningLedger extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/mining/';

    protected $version = 'v1';

    protected $scope = 'esi-industry.read_character_mining.v1';

    public $tags = ['character', 'industry'];

    protected $page = 1;
}