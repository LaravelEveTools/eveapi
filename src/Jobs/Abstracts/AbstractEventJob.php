<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\AbstractAuthCharacterJob;

abstract class AbstractEventJob extends AbstractAuthCharacterJob
{
    public function __construct(int $event_id, RefreshToken $token)
    {
        $this->event_id = $event_id;
        parent::__construct($token);
    }

    public function getEventId(): int
    {
        return $this->event_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'event_id' => $this->getEventId(),
        ]);
    }
}