<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;
use LaravelEveTools\EveApi\Traits\HasCompositePrimaryKey;
use LaravelEveTools\EveApi\Traits\IsReadOnly;

class invControlTowerResource extends Model
{
    use IsReadOnly, HasCompositePrimaryKey;

    public $incrementing = false;

    protected $table = 'invControlTowerResources';

    protected $primaryKey = ['controlTowerTypeID', 'resourceTypeID'];

}