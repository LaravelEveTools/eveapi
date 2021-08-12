<?php

namespace LaravelEveTools\EveApi\Jobs\Contracts\Pub;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Bids extends EsiBase
{
    protected $endpoint = '/contracts/public/bids/{contract_id}/';

    protected $version = 'v1';

    public $tags = ['public', 'contract'];

    /**
     * @var int
     */
    private $contract_id;

    public function __construct(int $contract_id)
    {
        $this->contract_id = $contract_id;
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'contract_id' => $this->contract_id
        ]);
    }
}