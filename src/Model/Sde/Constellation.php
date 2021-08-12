<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;

class Constellation extends Model
{

    public $incrementing = false;

    protected $primaryKey = 'constellation_id';

    protected $table = 'constellations';

    public function moons(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Moon::class, 'constellation_id', 'constellation_id');
    }

    public function region(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id', 'region_id');
    }

    public function stars(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Star::class, 'constellation_id', 'constellation_id');
    }

    public function solar_systems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SolarSystem::class, 'constellation_id', 'constellation_id');
    }

    public function planets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Planet::class, 'constellation_id', 'constellation_id');
    }
}