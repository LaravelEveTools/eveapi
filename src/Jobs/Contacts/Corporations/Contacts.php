<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCorporationJob;

/**
 * Return contacts of a corporation
 * 
 * https://esi.evetech.net/ui/#/Contacts/get_corporations_corporation_id_contacts
 */
abstract class Contacts extends AbstractCorporationJob
{
    protected $method = 'get';

    protected $endpoint = '/corporations/{corporation_id}/contacts/';

    protected $scope = 'esi-corporations.read_contacts.v1';

    protected $version = 'v2';

    public $tags = ['corporation', 'contact'];

    protected $page = 1;

}