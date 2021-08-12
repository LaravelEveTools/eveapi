<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractMailJob;

abstract class DeleteMail extends AbstractMailJob
{

    protected $method = 'delete';

    protected $endpoint = '/characters/{character_id}/mail/{mail_id}/';

    protected $scope = 'esi-mail.organize_mail.v1';

    public $tags = ['mail'];
}