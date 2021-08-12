<?php

namespace LaravelEveTools\EveApi\Events\UserInterface;

use Illuminate\Foundation\Events\Dispatchable;
use Seat\Eseye\Containers\EsiResponse;

class ContractWindowOpened
{
    use Dispatchable;

    public $result;

    public $contract_id;

    public function __construct(EsiResponse $result, int $contract_id)
    {
        $this->result = $result;

        $this->contract_id = $contract_id;
    }

}