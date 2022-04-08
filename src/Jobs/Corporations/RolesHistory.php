<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Return how roles have changed for a coporation’s members, up to a month
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_roles_history
 */
abstract class RolesHistory extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/roles/history/';

    protected $scope = 'esi-corporations.read_corporation_membership.v1';

    protected $version = 'v2';

    protected $page = 1;

    public $tags = ['corporation'];
}