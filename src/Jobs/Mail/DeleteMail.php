<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractMailJob;

/**
 * Delete a mail
 * 
 * https://esi.evetech.net/ui/?version=dev#/Mail/delete_characters_character_id_mail_mail_id
 */
abstract class DeleteMail extends AbstractMailJob
{

    protected $method = 'delete';

    protected $endpoint = '/characters/{character_id}/mail/{mail_id}/';

    protected $scope = 'esi-mail.organize_mail.v1';

    public $tags = ['character','mail'];
}