<?php

namespace LaravelEveTools\EveApi\Jobs\Fittings;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Fittings extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/fittings/';

    protected $scope = 'esi-fittings.write_fittings.v1';


    public function __construct($fitting, RefreshToken $token)
    {
        $this->request_body['fitting'] = $fitting;
        parent::__construct($token);
    }
}