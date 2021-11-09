<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Cspa extends AbstractAuthCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/cspa';

    protected $version = 'v5';

    protected $scope = 'esi-characters.read_contacts.v1';

}