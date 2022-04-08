<?php

namespace LaravelEveTools\EveApi\Jobs\Bookmarks\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * List Bookmarks from a character
 * This endpoint is paged
 * 
 * https://esi.evetech.net/ui/#/Bookmarks/get_characters_character_id_bookmarks
 */
abstract class Bookmarks extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/bookmarks';

    protected $version = 'v2';

    protected $scope = 'esi-bookmarks.read_character_bookmarks.v1';

    protected $tags = ['character', 'bookmarks'];

    protected $page = 1;
}