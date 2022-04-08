<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

use LaravelEveTools\EveApi\Jobs\Middleware\CheckTokenScope;
use LaravelEveTools\EveApi\Jobs\Middleware\CheckTokenVersion;
use LaravelEveTools\EveApi\Models\RefreshToken;

/**
 * Authed job requiring a token
 */
abstract class AbstractAuthedJob extends EsiBase
{

    public function __construct(RefreshToken $token)
    {
        $this->token = $token;
    }

    public function middleware()
    {
        return array_merge(parent::middleware(), [
            new CheckTokenScope,
            new CheckTokenVersion,
        ]);
    }

}