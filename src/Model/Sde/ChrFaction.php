<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;
use LaravelEveTools\EveApi\Traits\IsReadOnly;

class chrFaction extends Model
{
    use IsReadOnly;

    public $incrementing = false;

    protected $table = 'chrFactions';

    protected $primaryKey = 'factionID';

}