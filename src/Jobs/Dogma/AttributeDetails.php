<?php

namespace LaravelEveTools\EveApi\Jobs\Dogma;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get a list of dogma attribute ids
 * 
 * https://esi.evetech.net/ui/#/Dogma/get_dogma_attributes
 */
abstract class AttributeDetails extends EsiBase
{
    protected $endpoint = '/dogma/attributes/{attribute_id}/';

    public $tags = ['public', 'dogma'];

    /**
     * @var int
     */
    private $attribute_id;

    public function __construct(int $attribute_id)
    {
        $this->attribute_id = $attribute_id;
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'attribute_id' => $this->attribute_id
        ]);
    }

}