<?php

namespace LaravelEveTools\EveApi\Jobs\Universe;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Get information on an item group
 * 
 * https://esi.evetech.net/ui/?version=latest#/Universe/get_universe_groups_group_id
 */
abstract class GroupInformation extends EsiBase
{
    protected $endpoint = '/universe/groups/{group_id}/';

    public $tags = ['public', 'universe'];
    /**
     * @var int
     */
    private $group_id;

    public function __construct(int $group_id)
    {
        $this->group_id = $group_id;
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->group_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'group_id' => $this->getGroupId()
        ]);
    }
}