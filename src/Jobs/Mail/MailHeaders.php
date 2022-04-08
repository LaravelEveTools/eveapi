<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return the 50 most recent mail headers belonging to the character that match the query criteria. 
 * Queries can be filtered by label, and last_mail_id can be used to paginate backwards
 * 
 * https://esi.evetech.net/ui/?version=dev#/Mail/get_characters_character_id_mail
 */
abstract class MailHeaders extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/mail/';

    protected $version = 'v1';

    protected $scope = 'esi-mail.read_mail.v1';

    public $tags = ['character', 'mail'];
}