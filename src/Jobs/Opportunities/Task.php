<?php

namespace LaravelEveTools\EveApi\Jobs\Opportunities;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

/**
 * Return information of an opportunities task
 * 
 * https://esi.evetech.net/ui/?version=dev#/Opportunities/get_opportunities_tasks_task_id
 */
abstract class Task extends EsiBase
{

    protected $endpoint = '/opportunities/tasks/{task_id}/';

    public $tags = ['opportunities'];
    /**
     * @var int
     */
    private $task_id;

    public function __construct(int $task_id)
    {
        $this->task_id = $task_id;
    }

    /**
     * @return int
     */
    public function getTaskId(): int
    {
        return $this->task_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'task_id' => $this->getTaskId(),
        ]);
    }

}