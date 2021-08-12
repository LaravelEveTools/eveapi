<?php

namespace LaravelEveTools\EveApi\Jobs\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;
use LaravelEveTools\EveApi\Models\RefreshToken;

abstract class StarbaseDetails extends AbstractAuthCorporationJob
{
    protected $endpoint = '/corporations/{corporation_id}/starbases/{starbase_id}/';

    protected $scope = 'esi-corporations.read_starbases.v1';

    protected $version = 'v2';

    public $tags = ['corporation'];
    /**
     * @var int
     */
    private $starbase_id;

    public function __construct(int $corporation_id, int $starbase_id, int $system_id, RefreshToken $token)
    {
        $this->query_string['system_id'] = $system_id;
        $this->starbase_id = $starbase_id;
        parent::__construct($corporation_id, $token);
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'starbase_id' => $this->starbase_id,
        ]);
    }
}