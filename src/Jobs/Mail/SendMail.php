<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Create and send a new mail
 * 
 * https://esi.evetech.net/ui/?version=dev#/Mail/post_characters_character_id_mail
 */
abstract class SendMail extends AbstractAuthCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/mail/';

    protected $scope = 'esi-mail.send_mail.v1';

    public $tags = ['character','mail'];
}