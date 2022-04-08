<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Return a corporation’s facilities
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_facilities
 */
abstract class Facilities extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/facilities/';

    protected $scope = 'esi-corporations.read_facilities.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}