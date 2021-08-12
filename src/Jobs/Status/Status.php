<?php

use LaravelEveTools\EveApi\Models\Status\ServerStatus;
use Seat\Eseye\Exceptions\InvalidAuthenticationException;
use Seat\Eseye\Exceptions\InvalidContainerDataException;

class Status extends \LaravelEveTools\EveApi\Jobs\EsiBase
{
    /**
     * @var string
     */
    protected $method = 'get';

    /**
     * @var string
     */
    protected $endpoint = '/status/';

    /**
     * @var string
     */
    public $queue = 'high';

    /**
     * @var string
     */
    protected $version = 'v1';

    /**
     * @var string[]
     */
    protected $tags = ['public', 'meta'];

    /**
     * @return array
     */
    public function middleware(): array
    {
        return [];
    }

    /**
     * @throws InvalidAuthenticationException
     * @throws InvalidContainerDataException
     */
    public function handle()
    {
        $status = $this->retrieve();

        if($status->isCachedLoad()) return;

        $latest_status = ServerStatus::latest()->first();

        if(!$latest_status || $latest_status->created_at->addSeconds(30)->lt(carbon())){
            ServerStatus::create([
                'start_time'    => carbon($status->start_time),
                'playters'      => $status->players,
                'server_version'=> $status->server_version,
                'vip'           => property_exists($status, 'vip') ? $status->vip : false,
            ]);
        }

    }
}