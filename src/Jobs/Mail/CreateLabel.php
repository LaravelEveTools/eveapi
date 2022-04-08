<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Create a mail label
 * 
 * https://esi.evetech.net/ui/?version=dev#/Mail/post_characters_character_id_mail_labels
 */
abstract class CreateLabel extends AbstractAuthCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/mail/labels/';

    protected $scope = 'esi-mail.organize_mail.v1';

    protected $version = 'v2';

    protected $tabs = ['character', 'mail'];

}