<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Alliances;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthAllianceJob;

abstract class Contacts extends AbstractAuthAllianceJob
{

    protected $method = 'get';

    protected $endpoint = '/alliances/{alliance_id}/contacts/';

    protected $version = 'v2';

    protected $scope = 'esi-alliance.read_contacts.v1';

    public $tags = ['alliance', 'contact'];

    protected $page = 1;
}