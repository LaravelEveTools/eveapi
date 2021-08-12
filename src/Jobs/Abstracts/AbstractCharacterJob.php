<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

abstract class AbstractCharacterJob extends EsiBase
{

    /**
     * @var int Character id for the job
     */
    protected $character_id;

    public function __construct(int $character_id)
    {
        $this->character_id = $character_id;
    }

    /**
     * Character id for the job
     * @return int
     */
    public function getCharacterId(): int
    {
        return $this->character_id;
    }

    protected function buildUriValues(): array
    {
        return [
            'character_id' => $this->getCharacterId(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function tags(): array
    {
        $tags = parent::tags();

        if(! in_array('character', $tags))
            $tags[] = 'character';

        if(! in_array($this->getCharacterId(), $tags))
            $tags[] = $this->getCharacterId();

        return $tags;
    }
}