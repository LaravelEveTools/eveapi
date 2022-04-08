<?php

namespace LaravelEveTools\EveApi\Jobs\UserInterface;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthedJob;

/**
 * Open the New Mail window, according to settings from the request if applicable
 * 
 * https://esi.evetech.net/ui/?version=latest#/User%20Interface/post_ui_openwindow_newmail
 */
abstract class NewMail extends AbstractAuthedJob
{
    protected $endpoint = '/ui/openwindow/newmail/';

    protected $scope = 'esi-ui.open_window.v1';

    public $tags = ['ui'];
}