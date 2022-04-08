<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get information of an item category
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_categories_category_id
 */
abstract class CategoryInformation extends EsiBase
{
    protected $endpoint = '/universe/categories/{category_id}/';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $category_id;

    public function __construct(int $category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'category_id' => $this->getCategoryId()
        ]);
    }
}