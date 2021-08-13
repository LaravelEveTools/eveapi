<?php

namespace LaravelEveTools\EveApi\Contracts\Middleware;

interface CheckEsiStatusInterface
{
    public function handle($job, $next);
}