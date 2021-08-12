<?php

namespace LaravelEveTools\EveApi\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Maintenance implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;

    public $timeout = 12000;

    public $retryAfter = 12001;

    public function handle()
    {

    }
}