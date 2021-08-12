<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

abstract class MailingLists extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/mail/lists/';

    protected $scope = 'esi-mail.read_mail.v1';

    public $tags = ['mail'];
}