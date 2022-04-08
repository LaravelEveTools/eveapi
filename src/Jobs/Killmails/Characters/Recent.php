<?php

namespace LaravelEveTools\EveApi\Jobs\Killmails\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return a list of a character’s kills and losses going back 90 days
 * 
 * https://esi.evetech.net/ui/?version=dev#/Killmails/get_characters_character_id_killmails_recent
 */
abstract class Recent extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/killmails/recent/';

    protected $scope = 'esi-killmails.read_killmails.v1';

    protected $page = 1;
}