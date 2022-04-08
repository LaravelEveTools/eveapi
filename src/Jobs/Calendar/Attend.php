<?php

namespace LaravelEveTools\EveApi\Jobs\Calendar;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractEventJob;


/**
 * Set your response status to an event
 * 
 * https://esi.evetech.net/ui/#/Calendar/put_characters_character_id_calendar_event_id
 */
abstract class Attend extends AbstractEventJob
{
    protected $method = 'put';

    protected $version = 'v4';

    protected $endpoint = '/characters/{character_id}/calendar/';

    protected $tags = ['character', 'calendar'];

    protected $scope = 'esi-calendar.respond_calendar_events.v1';

}