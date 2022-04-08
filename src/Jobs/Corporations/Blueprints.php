<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Returns a list of blueprints the corporation owns
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_blueprints
 */
abstract class Blueprints extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/blueprints/';

    protected $scope = 'esi-corporations.read_blueprints.v1';

    protected $version = 'v3';

    protected $page = 1;

    public $tags = ['corporation'];
}