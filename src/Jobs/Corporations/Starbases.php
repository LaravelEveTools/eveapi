<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Returns list of corporation starbases (POSes)
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_starbases
 */
abstract class Starbases extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/starbases/';

    protected $scope = 'esi-corporations.read_starbases.v1';

    protected $version = 'v2';

    protected $page = 1;

    public $tags = ['corporation'];
}