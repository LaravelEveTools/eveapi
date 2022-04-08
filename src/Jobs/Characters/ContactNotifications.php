<?php

namespace LaravelEveTools\EveApi\Jobs\Characters;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Return notifications about having been added to someone’s contact list
 * 
 * https://esi.evetech.net/ui/#/Character/get_characters_character_id_notifications_contacts
 */
abstract class ContactNotifications extends AbstractAuthCharacterJob
{
    protected $method = 'get';

    protected $endpoint = '/characters/{character_id}/notifications/contacts/';

    protected $scope = 'esi-characters.read_notifications.v1';

    protected $version = 'v2';

    protected $tags = ['character'];
}