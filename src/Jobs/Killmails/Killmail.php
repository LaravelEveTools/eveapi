<?php

namespace LaravelEveTools\EveApi\Jobs\Killmails;



use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

abstract class Killmail extends EsiBase
{

    protected $endpoint = '/killmails/{killmail_id}/{killmail_hash}/';


    private $killmail_hash;
    /**
     * @var int
     */
    private $killmail_id;

    public function __construct(int $killmail_id, $killmail_hash)
    {
        $this->killmail_id = $killmail_id;
        $this->killmail_hash = $killmail_hash;
    }

    /**
     * @return mixed
     */
    public function getKillmailHash()
    {
        return $this->killmail_hash;
    }

    /**
     * @return int
     */
    public function getKillmailId(): int
    {
        return $this->killmail_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'killmail_id' => $this->getKillmailId(),
            'killmail_hash'=>$this->getKillmailHash()
        ]);
    }
}