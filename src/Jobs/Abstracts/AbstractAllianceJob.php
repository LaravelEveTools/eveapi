<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

abstract class AbstractAllianceJob extends EsiBase
{

    /**
     * @var int id Alliance id for the job
     */
    protected $alliance_id;

    public function __construct(int $alliance_id)
    {
        $this->alliance_id = $alliance_id;
    }

    /**
     * get alliance id
     * @return int
     */
    public function getAllianceId()
    {
        return $this->alliance_id;
    }

    /**
     * @return array build uri variables array
     */
    protected function buildUriValues(): array
    {
        return [
            'alliance_id' => $this->getAllianceId(),
        ];
    }

    /**
     * {@inheritdocs}
     */
    public function tags(): array
    {
        $tags = parent::tags();

        if(! in_array('alliance', $tags))
            $tags[] = 'alliance';

        try {
            if(! in_array($this->getAllianceId(), $tags))
                $tags[] = $this->getAllianceId();
        }catch (Exception $e) {
            logger()->error($e->getMessage(), $e->getTrace());
        }

        return $tags;
    }
}