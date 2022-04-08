<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Statistics about a corporation involved in faction warfare
 * 
 * https://esi.evetech.net/ui/#/Faction%20Warfare/get_corporations_corporation_id_fw_stats
 */
abstract class CorporationStats extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/fw/stats/';

    protected $version = 'v2';

    protected $tags = ['corporation', 'faction-warefare'];
}