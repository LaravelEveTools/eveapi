<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class MailHeaders extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/mail/';

    protected $scope = 'esi-mail.read_mail.v1';

    public $tags = ['mail'];
}