<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;


abstract class AbstractCorporationJob extends EsiBase
{

    /**
     * @var int Id of the corporation for the job
     */
    protected $corporation_id;

    public function __construct(int $corporation_id)
    {
        $this->corporation_id = $corporation_id;
    }

    /**
     * Character id for the job
     * @return int
     */
    public function getCorporationId(): int
    {
        return $this->corporation_id;
    }

    protected function buildUriValues(): array
    {
        return [
            'corporation_id' => $this->getCorporationId(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function tags(): array
    {
        $tags = parent::tags();

        if(! in_array('corporation', $tags))
            $tags[] = 'corporation';

        if(! in_array($this->getCorporationId(), $tags))
            $tags[] = $this->getCorporationId();

        return $tags;
    }
}