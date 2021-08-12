<?php

namespace LaravelEveTools\EveApi\Jobs\FactionWarefare;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class CharacterStats extends AbstractAuthCharacterJob
{

    protected $endpoint = 'characters/{character_id}/fw/stats/';

    protected $version = 'v2';

    protected $scope = 'esi-characters.read_fw_stats.v1';

    public $tags = ['character'];

}