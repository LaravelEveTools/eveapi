<?php

namespace LaravelEveTools\EveApi\Actions\RateLimits;

class IncrementEsiRateLimit extends AbstractRateLimitAction
{

    private function getRateLimitTtl(): float|int
    {
        return carbon('now')
            ->diffInSeconds(cache()->get('RATE_LIMIT_TTL', carbon('now')));
    }

    private function incrementRateLimit(int $amount)
    {
        cache()->increment(self::RATE_LIMIT_KEY, $amount);
    }

    private function setRateLimit($limit)
    {
        $time = carbon('now')->addSeconds(self::RATE_LIMIT_DURATION);
        cache()->set(self::RATE_LIMIT_KEY, $limit, $time);
        cache()->set(self::RATE_LIMIT_TTL, $time, $time);
    }

    public function handle(int $limit = 1)
    {
        if ($this->getRateLimitTtl() > 3) {
            $this->incrementRateLimit($limit);
        } else {
            $this->setRateLimit($limit);
        }
    }
}