<?php

namespace LaravelEveTools\EveApi\Jobs\Wallet\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;
use LaravelEveTools\EveApi\Models\RefreshToken;

abstract class Transactions extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporations_id}/wallet/';

    protected $scope = 'esi-wallet.read_corporation_wallet.v1';

    public $tags = ['wallet'];

    /**
     * @var int
     */
    private $division_id;

    public function __construct(int $corporation_id, int $division_id, RefreshToken $token)
    {
        $this->division_id = $division_id;
        parent::__construct($corporation_id, $token);
    }

    /**
     * @return int
     */
    public function getDivisionId(): int
    {
        return $this->division_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'division_id' => $this->getDivisionId(),
        ]);
    }

}