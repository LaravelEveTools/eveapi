<?php

namespace LaravelEveTools\EveApi\Jobs\UserInterface;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthedJob;

/**
 * Open the information window for a character, corporation or alliance inside the client
 * 
 * https://esi.evetech.net/ui/?version=latest#/User%20Interface/post_ui_openwindow_information
 */
abstract class OpenInformation extends AbstractAuthedJob
{
    protected $endpoint = '/ui/openwindow/information/';

    protected $scope = 'esi-ui.open_window.v1';

    protected $version = 'v1';

    public $tags = ['ui'];
}