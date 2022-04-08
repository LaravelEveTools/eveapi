<?php

namespace LaravelEveTools\EveApi\Jobs\Fittings;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Save a new fitting for a character
 * 
 * https://esi.evetech.net/ui/#/Fittings/post_characters_character_id_fittings
 */
abstract class CreateFitting extends AbstractAuthCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/fittings/';

    protected $version = 'v2';

    protected $scope = 'es-fittings.read_fittings.v1';

    public $tags = ['character', 'fitting'];
}