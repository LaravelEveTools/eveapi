<?php

namespace LaravelEveTools\EveApi\Jobs\Bookmarks\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;


/**
 * Get bookmark folders from a character
 * This endpoint is paged
 * 
 * https://esi.evetech.net/ui/#/Bookmarks/get_characters_character_id_bookmarks_folders
 */
abstract class Folders extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/bookmark/folders';

    protected $version = 'v2';

    protected $scope = 'esi-bookmarks.read_character_bookmarks.v1';

    protected $tags = ['character', 'bookmarks'];

    protected $page = 1;
}