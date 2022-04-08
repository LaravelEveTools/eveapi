<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractMailJob;

/**
 * Return the contents of an EVE mail
 * 
 * https://esi.evetech.net/ui/?version=dev#/Mail/get_characters_character_id_mail_mail_id
 */
abstract class Mail extends AbstractMailJob
{
    protected $endpoint = '/characters/{character_id}/mail/{mail_id}/';

    protected $version = 'v1';

    protected $scope = 'esi-mail.read_mail.v1';

    public $tags = ['character','mail'];
}