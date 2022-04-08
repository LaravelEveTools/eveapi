<?php

namespace LaravelEveTools\EveApi\Jobs\Fittings;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return fittings of a character
 * 
 * https://esi.evetech.net/ui/#/Fittings/get_characters_character_id_fittings
 */
abstract class Fittings extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/fittings/';

    protected $scope = 'esi-fittings.write_fittings.v1';

    protected $tags = ['character', 'fitting'];


}