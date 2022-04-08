<?php

namespace LaravelEveTools\EveApi\Jobs\Calendar;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractEventJob;

/**
 * Get all invited attendees for a given event
 * 
 * https://esi.evetech.net/ui/#/Calendar/put_characters_character_id_calendar_event_id
 */
abstract class Attendees extends AbstractEventJob
{
    protected $method = 'get';

    protected $version = 'v2';

    protected $endpoint = '/characters/{character_id}/calendar/{event_id}/attendees';

    protected $tags = ['character', 'calendar'];

    protected $scope = 'esi-calendar.read_calendar_events.v1';
}