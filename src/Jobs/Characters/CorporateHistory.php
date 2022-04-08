<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCharacterJob;

/**
 * Get a list of all the corporations a character has been a member of
 * 
 * https://esi.evetech.net/ui/#/Character/get_characters_character_id_corporationhistory
 */
abstract class CorporateHistory extends AbstractCharacterJob
{

    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/corporationhistory/';

    protected $version = 'v2';

    protected $tags = ['character'];

}