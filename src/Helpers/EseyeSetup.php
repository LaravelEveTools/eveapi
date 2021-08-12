<?php

namespace LaravelEveTools\EveApi\Helpers;

use Composer\InstalledVersions;
use OutOfBoundsException;
use Seat\Eseye\Configuration;
use Seat\Eseye\Containers\EsiAuthentication;
use Seat\Eseye\Eseye;

class EseyeSetup
{

    public function __construct()
    {
        try {
            $version = sprintf('v%s', InstalledVersions::getPrettyVersion('eveseat/eveapi'));
        } catch (OutOfBoundsException $e) {
            $version = 'dev';
        }

        $config = Configuration::getInstance();
        $config->http_user_agent = sprintf('SeAT %s', $version);
        $config->logfile_location = config('esi.eseye_logfile');
        $config->file_cache_location = config('esi.eseye_cache');
        $config->logger_level = config('esi.eseye_loglevel');
        $config->esi_scheme = config('esi.eseye_esi_scheme');
        $config->esi_host = config('esi.eseye_esi_host');
        $config->esi_port = config('esi.eseye_esi_port');
        $config->datasource = config('esi.eseye_esi_datasource');
        $config->sso_scheme = config('esi.eseye_sso_scheme');
        $config->sso_host = config('esi.eseye_sso_host');
        $config->sso_port = config('esi.eseye_sso_port');
    }


    /**
     * Gets an instance of Eseye.
     *
     * We automatically add the CLIENT_ID and SHARED_SECRET configured
     * for this SeAT instance to the EsiAuthentication container.
     *
     * @param \Seat\Eseye\Containers\EsiAuthentication|null $authentication
     *
     * @return \Seat\Eseye\Eseye
     * @throws \Seat\Eseye\Exceptions\InvalidContainerDataException
     */
    public function get(EsiAuthentication $authentication = null): Eseye
    {

        if ($authentication) {

            tap($authentication, function ($auth) {

                $auth->client_id = config('esi.eseye_client_id');
                $auth->secret = config('esi.eseye_client_secret');
            });

            return new Eseye($authentication);
        }

        // Return an unauthenticated Eseye instance
        return new Eseye;
    }
}