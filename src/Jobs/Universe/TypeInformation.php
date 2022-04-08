<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get information on a type
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_types_type_id
 */
abstract class TypeInformation extends EsiBase
{
    protected $endpoint = '/universe/types/{type_id}/';

    protected $version = 'v3';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $type_id;

    public function __construct(int $type_id)
    {
        $this->type_id = $type_id;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->type_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'type_id' => $this->getTypeId()
        ]);
    }
}