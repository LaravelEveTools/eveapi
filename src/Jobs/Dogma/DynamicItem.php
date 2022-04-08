<?php

namespace LaravelEveTools\EveApi\Jobs\Dogma;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Returns info about a dynamic item resulting from mutation with a mutaplasmid.
 * 
 * https://esi.evetech.net/ui/#/Dogma/get_dogma_dynamic_items_type_id_item_id
 */
abstract class DynamicItem extends EsiBase
{

    protected $endpoint = '/dogma/dynamic/items/{type_id}/{item_id}/';

    public $tags = ['public', 'dogma'];

    /**
     * @var int
     */
    private $item_id;
    /**
     * @var int
     */
    private $type_id;

    public function __construct(int $type_id, int $item_id)
    {
        $this->type_id = $type_id;
        $this->item_id = $item_id;
    }

    public function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'type_id'=>$this->type_id,
            'item_id'=>$this->item_id,
        ]);
    }
}