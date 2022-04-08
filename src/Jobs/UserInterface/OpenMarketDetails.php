<?php

namespace LaravelEveTools\EveApi\Jobs\UserInterface;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthedJob;

/**
 * Open the market details window for a specific typeID inside the client
 * 
 * https://esi.evetech.net/ui/?version=latest#/User%20Interface/post_ui_openwindow_marketdetails
 */
abstract class OpenMarketDetails extends AbstractAuthedJob
{
    protected $endpoint = '/ui/openwindow/marketdetails/';

    protected $scope = 'esi-ui.open_window.v1';

    protected $version = 'v1';

    public $tags = ['ui'];
}