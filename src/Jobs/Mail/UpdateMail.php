<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractMailJob;

/**
 * Update metadata about a mail
 * 
 * https://esi.evetech.net/ui/?version=dev#/Mail/put_characters_character_id_mail_mail_id
 */
abstract class UpdateMail extends AbstractMailJob
{
    protected $method = 'put';

    protected $version = 'v1';

    protected $endpoint = '/characters/{character_id}/mail/{mail_id}/';

    protected $scope = 'esi-mail.organise_mail.v1';

    public $tags = ['character','mail'];
}