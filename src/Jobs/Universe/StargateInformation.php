<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class StargateInformation extends EsiBase
{
    protected $endpoint = '/universe/stargates/{stargate_id}/';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $stargate_id;

    public function __construct(int $stargate_id)
    {
        $this->stargate_id = $stargate_id;
    }

    /**
     * @return int
     */
    public function getStargateId(): int
    {
        return $this->stargate_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'stargate_id' => $this->getStargateId()
        ]);
    }
}