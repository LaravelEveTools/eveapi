<?php

namespace LaravelEveTools\EveApi\Jobs\Opportunities;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return information of an opportunities group
 * 
 * https://esi.evetech.net/ui/?version=dev#/Opportunities/get_opportunities_groups_group_id
 */
abstract class Group extends EsiBase
{

    protected $endpoint = '/opportunities/groups/{group_id}/';

    public $tags = ['opportunities'];
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
            'group_id' => $this->getGroupId(),
        ]);
    }

}