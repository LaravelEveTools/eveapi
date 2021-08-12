<?php

namespace LaravelEveTools\EveApi\Calendar;

use LaravelEveTools\EveApi\Calendar\Abstracts\AbstractEventJob;

abstract class Attend extends AbstractEventJob
{
    protected $method = 'put';

    protected $version = 'v4';

    protected $endpoint = '/characters/{character_id}/calendar/';

    protected $tags = ['calendar'];

    protected $scope = 'esi-calendar.respond_calendar_events.v1';

}