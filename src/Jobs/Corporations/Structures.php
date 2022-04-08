<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Get a list of corporation structures. This route’s version includes the changes to structures 
 * detailed in this blog: https://www.eveonline.com/article/upwell-2.0-structures-changes-coming-on-february-13th
 * 
 * https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_structures
 */
abstract class Structures extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/structures/';

    protected $scope = 'esi-corporations.read_structures.v1';

    protected $version = 'v4';

    protected $page = 1;

    public $tags = ['corporation'];
}