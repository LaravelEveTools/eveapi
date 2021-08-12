<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

use App\Jobs\Middleware\CheckTokenScope;
use App\Jobs\Middleware\CheckTokenVersion;
use LaravelEveTools\EveApi\Models\RefreshToken;

abstract class AbstractAuthCorporationJob extends AbstractCorporationJob
{

    const CHARACTER_NOT_IN_CORPORATION = 'Character is not in the corporation';


    protected $roles = [];

    public function __construct(int $corporation_id, RefreshToken $token)
    {
        $this->token = $token;
        parent::__construct($corporation_id);
    }

    public function middleware()
    {
        return array_merge(parent::middleware(), [
            new CheckTokenScope,
            new CheckTokenVersion,
        ]);
    }
}