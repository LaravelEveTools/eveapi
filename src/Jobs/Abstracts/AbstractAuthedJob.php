<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

use App\Jobs\Middleware\CheckTokenScope;
use App\Jobs\Middleware\CheckTokenVersion;
use LaravelEveTools\EveApi\Models\RefreshToken;

abstract class AbstractAuthedJob extends EsiBase
{

    public function __construct(RefreshToken $token)
    {
        $this->token = $token;
        parent::__construct();
    }

    public function middleware()
    {
        return array_merge(parent::middleware(), [
            new CheckTokenScope,
            new CheckTokenVersion,
        ]);
    }

}