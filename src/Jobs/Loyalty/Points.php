<?php

namespace LaravelEveTools\EveApi\Jobs\Loyalty;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return a list of loyalty points for all corporations the character has worked for
 * 
 * https://esi.evetech.net/ui/?version=dev#/Loyalty/get_characters_character_id_loyalty_points
 */
abstract class Points extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/loyalty/points/';

    protected $version = 'v1';

    protected $scope = 'esi-characters.read_loyalty.v1';

    public $tags = ['character','loyalty'];
}