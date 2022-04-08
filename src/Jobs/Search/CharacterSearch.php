<?php

namespace LaravelEveTools\EveApi\Jobs\Search;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Search for entities that match a given sub-string.
 * 
 * https://esi.evetech.net/ui/?version=latest#/Search/get_characters_character_id_search
 */
abstract class CharacterSearch extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/search/';

    protected $version = 'v3';

    public $tags = ['search'];

    protected string $search;
    protected array $categories;

    public function __construct(string $search, array $categories, RefreshToken $token)
    {
        $this->search = $search;
        $this->categories = $categories;
        parent::__construct($token);
    }

}