<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCharacterJob;
use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Bulk lookup of character IDs to corporation, alliance and faction
 * 
 * https://esi.evetech.net/ui/#/Character/post_characters_affiliation
 */
abstract class Affiliation extends EsiBase
{
    const REQUEST_ID_LIMIT = 1000;
    /**
     * @var array
     */
    protected $character_ids;

    public function __construct(array $character_ids){
        $this->character_ids = $character_ids;
    }

    protected $method = 'post';

    protected $endpoint = '/characters/affiliation/';

    protected $version = 'v2';

    protected $tags = ['character', 'public'];

        /**
     * {@inheritdoc}
     */
    public function tags(): array
    {
        $tags = parent::tags();

        if(! in_array('character', $tags))
            $tags[] = 'character';

        return $tags;
    }
}