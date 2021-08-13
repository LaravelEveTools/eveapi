<?php

namespace LaravelEveTools\EveApi\Jobs\Middleware;

class CheckServerStatus
{

    public function handle($job, $next)
    {
        logger()->debug('Base Server Status called');
        $next($job);
    }
}