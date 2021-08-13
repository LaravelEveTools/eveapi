<?php

namespace LaravelEveTools\EveApi\Jobs\Calendar;

use LaravelEveTools\EveApi\Calendar\Abstracts\AbstractEventJob;

abstract class Event extends AbstractEventJob
{
    protected $method = 'get';

    protected $version = 'v2';

    protected $endpoint = '/characters/{character_id}/calendar/{event_id}/';

    protected $tags = ['calendar'];

    protected $scope = 'esi-calendar.read_calendar_events.v1';

}