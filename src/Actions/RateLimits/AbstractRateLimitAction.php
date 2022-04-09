<?php

namespace LaravelEveTools\EveApi\Actions\RateLimits;

abstract class AbstractRateLimitAction
{


    const RATE_LIMIT_DURATION = 300;

    const RATE_LIMIT_KEY = 'esi-rate-limit';

    const RATE_LIMIT_TTL = 'esi-rate-limit-ttl';

    public function GetRateLimit(): int
    {
        return self::RATE_LIMIT;
    }
}