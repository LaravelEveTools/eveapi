<?php

namespace LaravelEveTools\EveApi\Jobs\Contacts\Characters;

use App\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;
use LaravelEveTools\EveApi\Jobs\Middleware\Contacts\CheckAddContractJob;
use phpDocumentor\Reflection\Types\Boolean;

abstract class AddContact extends AbstractAuthCharacterJob
{

    protected $method = 'post';

    protected $endpoint = '/characters/{character_id}/contacts';

    protected $version = 'v2';

    protected $scope = 'esi-characters.write_contacts.v1';

}