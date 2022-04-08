<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Statistical overview of a character involved in faction warfare
 * 
 * https://esi.evetech.net/ui/#/Faction%20Warfare/get_characters_character_id_fw_stats
 */
abstract class CharacterStats extends AbstractAuthCharacterJob
{

    protected $endpoint = 'characters/{character_id}/fw/stats/';

    protected $version = 'v2';

    protected $scope = 'esi-characters.read_fw_stats.v1';

    public $tags = ['character', 'faction-warefare'];

}