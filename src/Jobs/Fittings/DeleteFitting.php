<?php

namespace LaravelEveTools\EveApi\Jobs\Fittings;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class DeleteFitting extends AbstractAuthCharacterJob
{
    protected $method = 'delete';

    protected $endpoint = '/characters/{character_id}/fittings/{fitting_id}/';

    protected $scope = 'esi-fittings.write_fittings.v1';

    protected $version = 'v2';

    /**
     * @var int
     */
    private $fitting_id;

    public function __construct(int $fitting_id, RefreshToken $token)
    {
        $this->fitting_id = $fitting_id;
        parent::__construct($token);
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'fitting_id' => $this->fitting_id,
        ]);
    }
}