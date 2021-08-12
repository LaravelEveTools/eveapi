<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;

class Star extends Model
{

    public $incrementing = false;

    protected $primaryKey = 'star_id';

    protected $table = 'stars';


    public function constellation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Constellation::class, 'constellation_id', 'constellation_id');
    }

    public function moons(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Moon::class, 'system_id', 'system_id');
    }

    public function planets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Planet::class, 'region_id', 'region_id');
    }

    public function type(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(InvType::class, 'type_id', 'typeID');
    }
}