<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

/**
 * Return custom labels for a corporation’s contacts
 * 
 * https://esi.evetech.net/ui/#/Contacts/get_corporations_corporation_id_contacts_labels
 */
abstract class Labels extends AbstractAuthCorporationJob
{
    protected $method = 'get';

    protected $endpoint = '/corporations/{corporation_id}/contacts/labels/';

    protected $version = 'v1';

    protected $scope = 'esi-corporations.read_contacts.v1';

    public $tags = ['corporation', 'contacts'];
}