<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;
use LaravelEveTools\EveApi\Traits\IsReadOnly;

class InvGroup extends Model
{
    use IsReadOnly;

    public $incrementing = false;

    protected $table = 'invGroup';

    protected $primaryKey = 'groupID';

}