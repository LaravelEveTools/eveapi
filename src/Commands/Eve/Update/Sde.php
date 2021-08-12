<?php

namespace LaravelEveTools\EveApi\Commands\Eve\Update;

use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use LaravelEveTools\EveApi\Settings\EveApi;

class Sde extends Command
{
    use DispatchesJobs;

    protected $signature = 'eve:update:sde 
                                {--local : check the local config file for the version string} 
                                {--force : Force re-installation of an existing SDE version}';

    protected $description = 'Updates the EVE Online SDE data';

    protected $json;

    protected $storage_path;

    public function handle()
    {

        $this->comment('Warning! This laravel command uses exec() to execute a');
        $this->comment('mysql shell command to import and extracted dump. Due');
        $this->comment('to the way the command is constructed, should someone ');
        $this->comment('view the current running process of your server, they');
        $this->comment('will be able to see your SeAT database users password');
        $this->line('');
        $this->line('Ensure that you understand this before continuing');

        DB::connection()->getDatabaseName();

        if(! $this->confirm('Are you sure you want to update to the latest EVE SDE?', true)){
            $this->warn('Exiting');

            return;
        }

        $this->json = $this->getJsonResource();

        if(!$this->json){
            $this->warn('Unable to reach the resources endpoint');

            return;
        }

        if($this->options('local')){

            $version_number = env('SDE_VERSION', null);

            if(! is_null($version_number)){
                $this->comment('Using locally sources version number of: '.$version_number);
                $this->json->version = env('SDE_VERSION');
            }else{
                $this->warn('Unable to determine the version number override. ' .
                    'Using remote version: ' . $this->json->version);
            }

        }

        if($this->json->version == EveApi::get('installed_sde') &&
                $this->option('force') == false){
            $this->warn("You are already running the latest SDE version");
            $this->warn("If you want to install it again, run the command with --force argument.");

            return;
        }

        $extra_tables = config('eveapi.sde.tables', []);
    }

    private function getJsonResource()
    {
    }
}