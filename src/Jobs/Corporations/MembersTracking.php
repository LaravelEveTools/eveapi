<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class MembersTracking extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/memberstracking/';

    protected $scope = 'esi-corporations.track_members.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}