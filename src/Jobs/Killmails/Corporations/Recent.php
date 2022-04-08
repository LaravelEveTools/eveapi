<?php

namespace LaravelEveTools\EveApi\Jobs\Killmails\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Get a list of a corporation’s kills and losses going back 90 days
 * 
 * https://esi.evetech.net/ui/?version=dev#/Killmails/get_corporations_corporation_id_killmails_recent
 */
abstract class Recent extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/killmails/recent/';

    protected $version = 'v1';

    protected $scope = 'esi-killmails.read_corporation_killmails.v1';

}