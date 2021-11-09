<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

use LaravelEveTools\EveApi\Models\RefreshToken;

abstract class AbstractAuthAllianceJob extends AbstractAllianceJob
{

    public function __construct(int $alliance_id, RefreshToken $token)
    {
        $this->token = $token;
        parent::__construct($alliance_id);
    }

}