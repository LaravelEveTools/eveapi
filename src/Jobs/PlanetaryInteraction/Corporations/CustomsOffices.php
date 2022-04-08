<?php

namespace LaravelEveTools\EveApi\Jobs\PlanetaryInteraction\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * List customs offices owned by a corporation
 * 
 * https://esi.evetech.net/ui/?version=dev#/Planetary%20Interaction/get_corporations_corporation_id_customs_offices
 */
abstract class CustomsOffices extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/customs_offices/';

    protected $version = 'v1';

    protected $scope = 'esi-planets.read_customs_offices.v1';

    public $tags = ['planetary interaction'];

}