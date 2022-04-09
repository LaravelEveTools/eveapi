<?php

namespace LaravelEveTools\EveApi\Actions\RateLimits;

class GetEsiRateLimit extends AbstractRateLimitAction
{

    public function handle(){
        return cache()->get(self::RATE_LIMIT_KEY);
    }
}