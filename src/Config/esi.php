<?php


return [

    // API Joblog logging
    'enable_joblog'         => false,

    'eseye_logfile'         => storage_path('logs'),
    'eseye_cache'           => storage_path('eseye'),
    'eseye_loglevel'        => env('APP_LOG_LEVEL', 'info'),

    'eseye_client_id'       => env('EVE_CLIENT_ID'),
    'eseye_client_secret'   => env('EVE_CLIENT_SECRET'),
    'eseye_client_callback' => env('EVE_CALLBACK_URL'),

    'eseye_esi_scheme'      => env('EVE_ESI_SCHEME', 'https'),
    'eseye_esi_host'        => env('EVE_ESI_HOST', 'esi.evetech.net'),
    'eseye_esi_port'        => env('EVE_ESI_PORT', 443),
    'eseye_esi_datasource'  => env('EVE_ESI_DATASOURCE', 'tranquility'),
    'eseye_sso_scheme'      => env('EVE_SSO_SCHEME', 'https'),
    'eseye_sso_host'        => env('EVE_SSO_HOST', 'login.eveonline.com'),
    'eseye_sso_port'        => env('EVE_SSO_PORT', 443),
];