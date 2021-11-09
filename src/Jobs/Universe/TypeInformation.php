<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

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