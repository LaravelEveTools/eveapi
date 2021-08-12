<?php

namespace LaravelEveTools\EveApi\Models\Status;

use Illuminate\Database\Eloquent\Model;

class ServerStatus extends Model
{

    protected $guarded = true;

    protected $primaryKey = 'id';

    protected $table = 'server_statuses';

}