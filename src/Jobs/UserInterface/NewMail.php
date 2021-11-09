<?php

namespace LaravelEveTools\EveApi\Jobs\UserInterface;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthedJob;

abstract class NewMail extends AbstractAuthedJob
{
    protected $endpoint = '/ui/openwindow/newmail/';

    protected $scope = 'esi-ui.open_window.v1';

    public $tags = ['ui'];
}