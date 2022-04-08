<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Alliances;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthAllianceJob;

/**
 * Return custom labels for an alliance’s contacts
 * 
 * https://esi.evetech.net/ui/#/Contacts/get_alliances_alliance_id_contacts_labels
 */
abstract class Labels extends AbstractAuthAllianceJob
{
    protected $method = 'get';

    protected $endpoint = '/alliances/{alliance_id}/contacts/labels/';

    protected $version = 'v1';

    protected $scope   = 'esi-alliance.read_contacts.v1';

    protected $tags = ['alliances', 'contacts'];



}