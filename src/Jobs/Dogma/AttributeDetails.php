<?php

namespace LaravelEveTools\EveApi\Jobs\Dogma;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

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