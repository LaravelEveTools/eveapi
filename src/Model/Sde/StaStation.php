<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;
use LaravelEveTools\EveApi\Traits\IsReadOnly;

class staStation extends Model
{
    use IsReadOnly;

    public $incrementing = false;

    protected $table = 'staStations';

    protected $primaryKey = 'stationID';

    public function getSolarSystemIdAttribute()
    {
        return $this->SolarSystemId;
    }

    public function getTypeIdAttribute()
    {
        return $this->stationTypeId;
    }

    public function getNameAttribute()
    {
        return $this->stationName;
    }

}