<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Corporations;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Contracts extends AbstractAuthCharacterJob
{

    protected $endpoint = '/corporations/{corporation_id}/contracts/';

    protected $version = 'v1';

    protected $scope = 'esi-contracts.read_corporation_contracts.v1';

    public $tags = ['corporation', 'contract'];

    protected $page = 1;

    protected $contract_id;

    public function __construct(RefreshToken $token)
    {

        parent::__construct($token);
    }

}