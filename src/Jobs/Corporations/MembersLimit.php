<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Return a corporation’s member limit, not including CEO himself
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_members_limit
 */
abstract class MembersLimit extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/members/limit/';

    protected $scope = 'esi-corporations.track_members.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}