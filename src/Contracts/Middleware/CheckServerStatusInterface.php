<?php

namespace LaravelEveTools\EveApi\Contracts\Middleware;

interface CheckServerStatusInterface
{

    public function handle($job, $next);
}