<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class GraphicInformation extends EsiBase
{
    protected $endpoint = '/universe/graphics/{graphic_id}/';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $graphic_id;

    public function __construct(int $graphic_id)
    {
        $this->graphic_id = $graphic_id;
    }

    /**
     * @return int
     */
    public function getGraphicId(): int
    {
        return $this->graphic_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'graphic_id' => $this->getGraphicId()
        ]);
    }
}