<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Corporation;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractCorporationJob;

abstract class Contacts extends AbstractCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/contacts/';

    protected $scope = 'esi-corporations.read_contacts.v1';

    protected $version = 'v2';

    public $tags = ['corporation', 'contact'];

    protected $page = 1;

}