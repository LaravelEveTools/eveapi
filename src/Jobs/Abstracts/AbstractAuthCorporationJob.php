<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

use LaravelEveTools\EveApi\Jobs\Middleware\CheckTokenScope;
use LaravelEveTools\EveApi\Jobs\Middleware\CheckTokenVersion;
use LaravelEveTools\EveApi\Models\RefreshToken;

/**
 * Authed Corporaiton job requirin a Token.
 */
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