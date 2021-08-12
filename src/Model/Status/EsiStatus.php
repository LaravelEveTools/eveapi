<?php

namespace LaravelEveTools\EveApi\Models\Status;

use Illuminate\Database\Eloquent\Model;

class EsiStatus extends Model
{

    protected static $unguarded = true;

    protected $primaryKey = 'id';

    protected $table = 'esi_statuses';
}