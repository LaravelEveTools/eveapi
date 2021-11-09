<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;



use LaravelEveTools\EveApi\Models\RefreshToken;

abstract class AbstractFleetJob extends AbstractAuthedJob
{

    /**
     * @var int
     */
    protected $fleet_id;

    /**
     * {@inheritdoc}
     */
    public function tags(): array
    {
        $tags = parent::tags();

        if(! in_array('fleet', $tags))
            $tags[] = 'fleet';

        if(! in_array($this->getFleetId(), $tags))
            $tags[] = $this->getFleetId();

        return $tags;
    }

    /**
     * @return int
     */
    public function getFleetId(): int
    {
        return $this->fleet_id;
    }

    /**
     * @param int $fleet_id ID of the fleet
     * @param RefreshToken $token
     */
    public function __construct(int $fleet_id, RefreshToken $token)
    {
        $this->fleet_id = $fleet_id;
        parent::__construct($token);
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'fleet_id' => $this->getFleetId(),
        ]);
    }
}