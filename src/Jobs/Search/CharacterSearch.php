<?php

namespace LaravelEveTools\EveApi\Jobs\Search;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class CharacterSearch extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/search/';

    protected $version = 'v3';

    public $tags = ['search'];

    public function __construct(RefreshToken $token)
    {
        parent::__construct($token);
    }

}