<?php

namespace LaravelEveTools\EveApi\Jobs\Wars;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return a list of kills related to a war
 * 
 * https://esi.evetech.net/ui/?version=latest#/Wars/get_wars_war_id_killmails
 */
abstract class WarKillmails extends EsiBase
{

    protected $endpoint = '/wars/{war_id}/killmails/';

    public $tags = ['public', 'war'];

    /**
     * @var int
     */
    private $war_id;

    public function __construct(int $war_id)
    {
        $this->war_id = $war_id;
    }

    /**
     * @return int
     */
    public function getWarId(): int
    {
        return $this->war_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
           'war_id' => $this->getWarId(),
        ]);
    }

}