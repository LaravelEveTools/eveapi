<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class CreateLabel extends AbstractAuthCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/mail/labels/';

    protected $scope = 'esi-mail.organize_mail.v1';

    protected $version = 'v2';

}