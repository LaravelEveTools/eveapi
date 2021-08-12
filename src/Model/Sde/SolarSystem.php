<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{

    public $incrementing = false;

    protected $primaryKey = 'system_id';

    protected $table = 'solar_systems';

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
        return $this->hasMany(Planet::class, 'system_id', 'system_id');
    }

    public function region(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id', 'region_id');
    }

    public function star(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Star::class, 'system_id', 'system_id');
    }

    public function sovereignty()
    {
        //return $this->hasOne()
        //TODO: Implement Sovereignty Models and API
    }

}