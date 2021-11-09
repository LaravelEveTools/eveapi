<?php

namespace LaravelEveTools\EveApi\Jobs\Middleware;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

class CheckEsiStatus
{

    public function handle($job, $next)
    {
        $next($job);
    }

}