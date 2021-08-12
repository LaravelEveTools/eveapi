<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractMailJob;

abstract class Mail extends AbstractMailJob
{


    protected $endpoint = '/characters/{character_id}/mail/{mail_id}/';

    protected $scope = 'esi-mail.read_mail.v1';

    public $tags = ['mail'];
}