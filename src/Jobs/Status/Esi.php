<?php

use App\Models\EsiStatus;
use LaravelEveTools\EveApi\Jobs\EsiBase;

class Esi extends EsiBase
{

    /**
     * @var string
     */
    protected $method = 'get';

    protected $endpoint = '/ping';



    protected $tags = ['public', 'meta'];

    public function middleware()
    {
        return [];
    }


    public function handle()
    {
        $start = microtime(true);
        try{
            $status = $this->retrive()->raw;
        }catch(Exception $e){
            $status = 'Request failed with: '.$e->getMessage();
        }
        $end = microtime(true) - $start;

        (new EsiStatus([
            'status'=> $status,
            'request_time' => $end,
        ]))->save();
    }
}