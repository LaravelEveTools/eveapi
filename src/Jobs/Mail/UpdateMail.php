<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractMailJob;

abstract class UpdateMail extends AbstractMailJob
{
    protected $method = 'put';

    protected $endpoint = '/characters/{character_id}/mail/{mail_id}/';

    protected $scope = 'esi-mail.organise_mail.v1';

    public $tags = ['mail'];
}