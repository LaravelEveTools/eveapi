<?php

namespace LaravelEveTools\EveApi\Jobs\Calendar;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Calendar extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $version = 'v2';

    protected $endpoint = '/characters/{character_id}/calendar/';

    protected $tags = ['calendar'];

    protected $scope = 'esi-calendar.read_calendar_events.v1';

}