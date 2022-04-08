<?php

namespace LaravelEveTools\EveApi\Jobs\Calendar;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;


/**
 * Get 50 event summaries from the calendar. If no from_event ID is given, 
 * the resource will return the next 50 chronological event summaries from now. 
 * If a from_event ID is specified, it will return the next 50 chronological event 
 * summaries from after that event
 * 
 * https://esi.evetech.net/ui/#/Calendar/get_characters_character_id_calendar
 */
abstract class Calendar extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $version = 'v2';

    protected $endpoint = '/characters/{character_id}/calendar/';

    protected $tags = ['character', 'calendar'];

    protected $scope = 'esi-calendar.read_calendar_events.v1';

}