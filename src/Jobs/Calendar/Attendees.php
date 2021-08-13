<?php

namespace LaravelEveTools\EveApi\Jobs\Calendar;

use LaravelEveTools\EveApi\Calendar\Abstracts\AbstractEventJob;

abstract class Attendees extends AbstractEventJob
{
    protected $method = 'get';

    protected $version = 'v2';

    protected $endpoint = '/characters/{character_id}/calendar/{event_id}/attendees';

    protected $tags = ['calendar'];

    protected $scope = 'esi-calendar.read_calendar_events.v1';
}