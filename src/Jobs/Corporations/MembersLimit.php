<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class MembersLimit extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/members/limit/';

    protected $scope = 'esi-corporations.track_members.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}