<?php

namespace LaravelEveTools\EveApi\Jobs\UserInterface;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthedJob;

abstract class OpenMarketDetails extends AbstractAuthedJob
{
    protected $endpoint = '/ui/openwindow/marketdetails/';

    protected $scope = 'esi-ui.open_window.v1';

    protected $version = 'v1';

    public $tags = ['ui'];
}