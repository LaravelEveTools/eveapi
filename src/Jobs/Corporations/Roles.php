<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Return the roles of all members if the character has the personnel manager role 
 * or any grantable role.
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_roles
 */
abstract class Roles extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/roles/';

    protected $scope = 'esi-corporations.read_corporation_membership.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}