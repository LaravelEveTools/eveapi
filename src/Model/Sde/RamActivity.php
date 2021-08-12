<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;
use LaravelEveTools\EveApi\Traits\IsReadOnly;

class RamActivity extends Model
{
    use IsReadOnly;

    protected $table = 'ramActivities';

    protected $primaryKey = 'activityID';

    public $incrementing = false;
}