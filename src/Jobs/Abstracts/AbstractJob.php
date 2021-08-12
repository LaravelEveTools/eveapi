<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use LaravelEveTools\EveApi\Events\EsiLoggableEvent;
use LaravelEveTools\EveApi\Helpers\LoggingContainer;
use Seat\Eseye\Containers\EsiResponse;

abstract class AbstractJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute Job
     * @return mixed
     */
    abstract public function handle();

    /**
     * Apply Tags to the job
     *
     * @return string[]
     */
    public function tags(): array
    {
        if(property_exists($this, 'tags'))
            return $this->tags;
        return ['other'];
    }

    public function failed(\Exception $exception){
        dispatch(new EsiLoggableEvent((new LoggingContainer)
            ->set('type', 'exception')
            ->set('exd', get_class($exception).':'.$exception->getMessage())
            ->set('exf', 1)
        ));
    }

    /**
     * when to give up on the job
     *
     * @return \Illuminate\Support\Carbon
     */
    public function retryUntil(): \Illuminate\Support\Carbon
    {
        return now()->addSeconds(3600);
    }

}