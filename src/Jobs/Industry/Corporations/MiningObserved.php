<?php

namespace LaravelEveTools\EveApi\Jobs\Industry\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;
use LaravelEveTools\EveApi\Models\RefreshToken;


/**
 * Paginated record of all mining seen by an observer
 * 
 * https://esi.evetech.net/ui/?version=dev#/Industry/get_corporation_corporation_id_mining_observers_observer_id
 */
abstract class MiningObserved extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporation/{corporation_id}/mining/observers/{observer_id}/';

    protected $scope = 'esi-industry.read_corporation_mining.v1';

    protected $page = 1;

    /**
     * @var int
     */
    private $objserver_id;

    public function __construct(int $corporation_id, int $observer_id, RefreshToken $token)
    {
        $this->objserver_id = $observer_id;
        parent::__construct($corporation_id, $token);
    }

    /**
     * @return int
     */
    public function getObjserverId(): int
    {
        return $this->objserver_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'observer_id' => $this->getObjserverId()
        ]);
    }
}