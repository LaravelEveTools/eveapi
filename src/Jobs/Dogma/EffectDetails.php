<?php

namespace LaravelEveTools\EveApi\Jobs\Dogma;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class EffectDetails extends EsiBase
{

    protected $endpoint = '/dogma/effects/{effect_id}';

    /**
     * @var int
     */
    private $effect_id;

    public function __construct(int $effect_id)
    {
        $this->effect_id = $effect_id;
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'effect_id' => $this->effect_id
        ]);
    }

}