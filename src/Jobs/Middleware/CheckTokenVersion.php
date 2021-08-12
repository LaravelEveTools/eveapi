<?php


namespace LaravelEveTools\EveApi\Jobs\Middleware;

use LaravelEveTools\EveApi\Exceptions\TokenVersionException;
use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;
use LaravelEveTools\EveApi\Models\RefreshToken;

class CheckTokenVersion
{

    public function handle($job, $next)
    {
        if(! is_subclass_of($job, EsiBase::class)){
            next($job);
            return;
        }

        $ver = $job->getToken()->version();

        if($ver == RefreshToken::CURRENT_VERSION){
            $next($job);
        }else{
            logger()->error("Job not run due to invalid token version", [
                'job'=> get_class($job),
                'token_id'=>$job->getToken()->character_id
            ]);
            $job->failed(new TokenVersionException("Token version is not valid"));
        }
    }
}
