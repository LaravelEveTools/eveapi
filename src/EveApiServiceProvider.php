<?php

namespace LaravelEveTools\EveApi;

use Illuminate\Support\ServiceProvider;
use LaravelEveTools\EveApi\Helpers\EseyeSetup;

class EveApiServiceProvider extends ServiceProvider {


    public function boot(){
        $this->add_esi_config();
    }

    public function register(){
        //$this->mergeConfigFrom(__DIR__.'/Config/ev);

        $this->app->singleton('esi-client', function(){
            return new EseyeSetup;
        });

    }

    private function add_esi_config()
    {
        $this->publishes([
            __DIR__.'/Config/esi.php' => config_path('esi.php'),
        ], ['config', 'eveapi']);
    }


}

