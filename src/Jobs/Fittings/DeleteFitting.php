<?php

namespace LaravelEveTools\EveApi\Jobs\Fittings;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Delete a fitting from a character
 * 
 * https://esi.evetech.net/ui/#/Fittings/delete_characters_character_id_fittings_fitting_id
 */
abstract class DeleteFitting extends AbstractAuthCharacterJob
{
    protected $method = 'delete';

    protected $endpoint = '/characters/{character_id}/fittings/{fitting_id}/';

    protected $scope = 'esi-fittings.write_fittings.v1';

    protected $version = 'v2';

    protected $tags = ['character', 'fitting'];

    /**
     * @var int
     */
    protected $fitting_id;

    public function __construct(int $fitting_id, RefreshToken $token)
    {
        $this->fitting_id = $fitting_id;
        parent::__construct($token);
    }

    protected function GetFittingId(){
        return $this->fitting_id;
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'fitting_id' => $this->GetFittingId(),
        ]);
    }
}