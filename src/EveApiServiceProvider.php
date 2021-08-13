<?php

namespace LaravelEveTools\EveApi;

use Illuminate\Support\ServiceProvider;
use LaravelEveTools\EveApi\Contracts\Middleware\CheckEsiStatusInterface;
use LaravelEveTools\EveApi\Contracts\Middleware\CheckServerStatusInterface;
use LaravelEveTools\EveApi\Helpers\EseyeSetup;
use LaravelEveTools\EveApi\Jobs\Middleware\CheckEsiStatus;
use LaravelEveTools\EveApi\Jobs\Middleware\CheckServerStatus;

class EveApiServiceProvider extends ServiceProvider {


    public function boot(){
        $this->add_esi_config();

    }

    public function register(){

        $this->bind_contracts();

        $this->app->singleton('esi-client', function(){
            return new EseyeSetup;
        });

    }

    public function bind_contracts(){
        $this->app->bind(CheckEsiStatusInterface::class, CheckEsiStatus::class);
        $this->app->bind(CheckServerStatusInterface::class, CheckServerStatus::class);
    }

    private function add_esi_config()
    {
        $this->publishes([
            __DIR__.'/Config/esi.php' => config_path('esi.php'),
        ], ['config', 'eveapi']);
    }


}

