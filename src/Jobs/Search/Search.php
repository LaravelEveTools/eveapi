<?php

namespace LaravelEveTools\EveApi\Jobs\Search;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Search extends EsiBase
{

    protected $endpoint = '/search/';

    protected $version = 'v2';

}