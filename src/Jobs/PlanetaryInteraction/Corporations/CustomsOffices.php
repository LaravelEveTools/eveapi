<?php

namespace LaravelEveTools\EveApi\Jobs\PlanetaryInteraction\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class CustomsOffices extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/customs_offices/';

    protected $scope = 'esi-planets.read_customs_offices.v1';

    public $tags = ['planetary interaction'];

}