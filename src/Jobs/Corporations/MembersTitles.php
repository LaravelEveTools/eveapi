<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class MembersTitles extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/members/titles/';

    protected $scope = 'esi-corporations.read_titles.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}