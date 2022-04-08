<?php

namespace LaravelEveTools\EveApi\Jobs\Calendar;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractEventJob;

/**
 * Get all the information for a specific event
 * 
 * https://esi.evetech.net/ui/#/Calendar/get_characters_character_id_calendar_event_id
 */
abstract class Event extends AbstractEventJob
{
    protected $method = 'get';

    protected $version = 'v4';

    protected $endpoint = '/characters/{character_id}/calendar/{event_id}/';

    protected $tags = ['character','calendar'];

    protected $scope = 'esi-calendar.read_calendar_events.v1';

}