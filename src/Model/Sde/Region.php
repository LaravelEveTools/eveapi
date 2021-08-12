<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    public $incrementing = false;

    protected $primaryKey = 'region_id';

    protected $table = 'regions';

    public function constellations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Constellation::class, 'region_id', 'region_id');
    }

    public function moons(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Moon::class, 'region_id', 'region_id');
    }

    public function planets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Planet::class, 'region_id', 'region_id');
    }

    public function solar_systems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SolarSystem::class, 'region_id', 'region_id');
    }

    public function stars(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Star::class, 'region_id', 'region_id');
    }

}