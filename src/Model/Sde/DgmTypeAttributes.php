<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;
use LaravelEveTools\EveApi\Traits\HasCompositePrimaryKey;
use LaravelEveTools\EveApi\Traits\IsReadOnly;

class DgmTypeAttributes extends Model
{
    use IsReadOnly;
    use HasCompositePrimaryKey;

    public $incrementing = false;

    protected $table = 'dgmTypeAttributes';

    protected $primaryKey = ['typeID', 'attributeID'];

}