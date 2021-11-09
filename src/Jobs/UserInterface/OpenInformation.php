<?php

namespace LaravelEveTools\EveApi\Jobs\UserInterface;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthedJob;

abstract class OpenInformation extends AbstractAuthedJob
{
    protected $endpoint = '/ui/openwindow/information/';

    protected $scope = 'esi-ui.open_window.v1';


    public $tags = ['ui'];
}