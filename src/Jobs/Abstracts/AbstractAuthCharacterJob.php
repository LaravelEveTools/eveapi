<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

use App\Jobs\Middleware\CheckTokenScope;
use App\Jobs\Middleware\CheckTokenVersion;
use App\Models\RefreshToken;

abstract class AbstractAuthCharacterJob extends AbstractCharacterJob
{

    public function __construct(RefreshToken $token)
    {
        $this->token = $token;
        parent::__construct($token->character_id);
    }

    public function middleware()
    {
        return array_merge(parent::middleware(), [
            new CheckTokenScope,
            new CheckTokenVersion,
        ]);
    }

}