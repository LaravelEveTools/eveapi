<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class Labels extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/mail/labels/';

    protected $scope = 'esi-mail.read_mail.v1';

    protected $version = 'v3';

    public $tags = ['mail'];

}