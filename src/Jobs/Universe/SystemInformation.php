<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get information on a solar system.
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_systems_system_id
 */
abstract class SystemInformation extends EsiBase
{
    protected $endpoint = '/universe/systems/{system_id}/';

    protected $version = 'v4';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $system_id;

    public function __construct(int $system_id)
    {
        $this->system_id = $system_id;
    }

    /**
     * @return int
     */
    public function getSystemId(): int
    {
        return $this->system_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'system_id' => $this->getSystemId()
        ]);
    }
}