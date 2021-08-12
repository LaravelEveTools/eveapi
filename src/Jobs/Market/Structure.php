<?php

namespace LaravelEveTools\EveApi\Jobs\Market;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthedJob;
use LaravelEveTools\EveApi\Models\RefreshToken;

abstract class Structure extends AbstractAuthedJob
{

    protected $endpoint = '/markets/structures/{structure_id}/';

    protected $scope = 'esi-markets.structure_markets.v1';

    public $tags = ['markets'];

    /**
     * @var int
     */
    private $structure_id;

    public function __construct(int $structure_id, RefreshToken $token)
    {
        $this->structure_id = $structure_id;
        parent::__construct($token);
    }

    /**
     * @return int
     */
    public function getStructureId(): int
    {
        return $this->structure_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'structure_id' => $this->getStructureId(),
        ]);
    }
}