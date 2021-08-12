<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Alliances;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthAllianceJob;

abstract class Labels extends AbstractAuthAllianceJob
{

    protected $endpoint = '/alliances/{alliance_id}/contacts/labels/';

    protected $version = 'v1';

    protected $scope   = 'esi-alliance.read_contacts.v1';

    public $tags = ['alliances', 'contacts'];



}