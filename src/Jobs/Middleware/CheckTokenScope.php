<?php


namespace LaravelEveTools\EveApi\Jobs\Middleware;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

class CheckTokenScope
{

    public function handle($job, $next)
    {

        if(! is_subclass_of($job, EsiBase::class)){

            $next($job);
            return;
        }

        if($job->getScope() == '' || in_array($job->getScope(), $job->getToken()->scopes)){

            $next($job);
            return;
        }

        logger()->warning("Job without the required scopes has been queued", [
            'Job' => get_class($job),
            'Required Scopes' => $job->getScope(),
            'Token scopes' => $job->getToken()->scopes,
            'Token owner'   => $job->getToken()->character_id,
        ]);

    }

}
