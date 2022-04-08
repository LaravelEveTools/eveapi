<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Returns a corporation’s titles
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_titles
 */
abstract class Titles extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/titles/';

    protected $scope = 'esi-corporations.read_titles.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
}