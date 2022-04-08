<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;


/**
 * Return all mailing lists that the character is subscribed to
 * 
 * https://esi.evetech.net/ui/?version=dev#/Mail/get_characters_character_id_mail_lists
 */
abstract class MailingLists extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/mail/lists/';

    protected $version = 'v1';

    protected $scope = 'esi-mail.read_mail.v1';

    public $tags = ['character','mail'];
}