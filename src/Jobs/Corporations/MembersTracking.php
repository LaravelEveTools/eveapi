<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Returns additional information about a corporation’s members which 
 * helps tracking their activities
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_membertracking
 */
abstract class MembersTracking extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/memberstracking/';

    protected $scope = 'esi-corporations.track_members.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}