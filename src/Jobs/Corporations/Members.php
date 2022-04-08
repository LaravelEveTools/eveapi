<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Return the current member list of a corporation, the token’s character need to be a
 * member of the corporation.
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_members
 */
abstract class Members extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/members/';

    protected $scope = 'esi-corporations.read_membership.v1';

    protected $version = 'v4';

    public $tags = ['corporation'];

}