<?php

namespace LaravelEveTools\EveApi\Jobs\Middleware\Contacts;

use LaravelEveTools\EveApi\Jobs\Abstracts\EsiBase;

class CheckAddContractJob
{
    public function handle($job, $next)
    {
        if(is_subclass_of($job, EsiBase::class)){


            $contact_ids = $job->getRequestBody('contact_ids');
            if(count($contact_ids) == 0){
                logger()->warning("minimum of 1 contact_id is required for job: ".get_class($job));
                return;
            }

            if(count($contact_ids) > 100){
                logger()->warninig('maximum of 100 contact_ids are allowed for job: '.get_class($job));
                return;
            }

        }

        $next($job);
    }

}