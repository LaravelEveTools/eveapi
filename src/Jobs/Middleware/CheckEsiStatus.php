<?php

namespace LaravelEveTools\EveApi\Jobs\Middleware;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

class CheckEsiStatus
{

    public function handle($job, $next)
    {
        if(is_subclass_of($job, EsiBase::class)){

        }

        $next($job);
    }


    private function isEsiOnline(): bool
    {
        $status = cache()->remember('esi_db_status', 60, function(){
            //return EsiStatus::latest()->first()
        });

        if(! $status) return true;

        if($status->created_at->lte(carbon('now')->subMinutes(30)))
            return false;

        if($status->status == 'ok')
            return true;
    }

}