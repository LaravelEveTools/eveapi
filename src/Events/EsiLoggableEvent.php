<?php

namespace LaravelEveTools\EveApi\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use LaravelEveTools\EveApi\Helpers\LoggingContainer;

class EsiLoggableEvent
{
    use Dispatchable, SerializesModels;

    /**
     * @var \LaravelEveTools\EveApi\Helpers\LoggingContainer
     */
    public $log;

    public function __construct(LoggingContainer $log)
    {
        $this->log = $log;
    }

}