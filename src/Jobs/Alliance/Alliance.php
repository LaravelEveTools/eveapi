<?php


/**
 * Get details of single alliance.
 *
 * Return Data:
 * {
 *  creator_corporation_id
 *  creator_id
 *  date_founded
 *  executor_corporation_id
 *  name
 *  ticker
 * }
 */

namespace LaravelEveTools\EveApi\Jobs\Alliance;

use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAllianceJob;

abstract class Alliance extends AbstractAllianceJob
{
    protected $method = 'get';

    protected $endpoint = '/alliances/{alliance_id}/';

    protected $version = 'v4';

    protected $tags = ['public', 'alliance'];


}