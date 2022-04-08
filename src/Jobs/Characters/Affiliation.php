<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCharacterJob;

/**
 * Bulk lookup of character IDs to corporation, alliance and faction
 * 
 * https://esi.evetech.net/ui/#/Character/post_characters_affiliation
 */
abstract class Affiliation extends AbstractCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/affiliation/';

    protected $version = 'v2';

    protected $tags = ['character', 'public'];

}