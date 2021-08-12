<?php

namespace LaravelEveTools\EveApi\Jobs\Bookmarks\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Bookmarks extends AbstractAuthCorporationJob
{
    protected $method = 'get';

    protected $endpoint = '/corporations/{corporations_id}/bookmarks';

    protected $version = 'v1';

    protected $scope = 'esi-bookmarks.read_corporation_bookmarks.v1';

    protected $tags = ['corporations', 'bookmarks'];

    protected $page = 1;
}