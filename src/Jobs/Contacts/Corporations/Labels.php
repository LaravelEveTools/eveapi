<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Corporations;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCorporationJob;

abstract class Labels extends AbstractAuthCorporationJob
{

    protected $endpoint = '/corporations/{corporation_id}/contacts/labels/';

    protected $version = 'v1';

    protected $scope = 'esi-corporations.read_contacts.v1';

    public $tags = ['corporation', 'contacts'];
}