<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return a list of the users mail labels, unread counts for each label and a total unread count.
 * 
 * https://esi.evetech.net/ui/?version=dev#/Mail/get_characters_character_id_mail_labels
 */
abstract class Labels extends AbstractAuthCharacterJob
{

    protected $endpoint = '/characters/{character_id}/mail/labels/';

    protected $scope = 'esi-mail.read_mail.v1';

    protected $version = 'v3';

    public $tags = ['character','mail'];

}