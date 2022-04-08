<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Return corporation hangar and wallet division names, only show if a division 
 * is not using the default name
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_divisions
 */
abstract class Divisions extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/divisions/';

    protected $scope = 'esi-corporations.read_divisions.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}