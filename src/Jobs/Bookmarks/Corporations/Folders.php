<?php

namespace LaravelEveTools\EveApi\Jobs\Bookmarks\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Folders extends AbstractAuthCorporationJob
{

    protected $method = 'get';

    protected $endpoint = '/corporations/{corporation_id}/bookmarks/folders/';

    protected $version = 'v1';

    protected $scope = 'esi-bookmarks.read_corporation_bookmarks.v1';

    protected $tags = ['corporation', 'bookmarks'];

    protected $page = 1;
}