<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;
use LaravelEveTools\EveApi\Traits\IsReadOnly;

class MapDenormalize extends Model
{
    use IsReadOnly;

    const BELT = 9;

    const CONSTELLATION = 4;

    const MOON = 8;

    const PLANET = 7;

    const REGION = 3;

    const STATION = 15;

    const SUN = 6;

    const SYSTEM = 5;

    const UBIQUITOUS = 2396;

    const COMMON = 2397;

    const UNCOMMON = 2398;

    const RARE = 2400;

    const EXCEPTIONAL = 2401;


    public $incrementing = false;

    protected $table = 'mapDenormalize';

    protected $primaryKey = 'itemID';

    private $moon_indicators;


    public function scopeConstellations($query)
    {
        return $query->where('groupID', self::CONSTELLATION);
    }

    public function scopeMoons($query)
    {
        return $query->where('groupID', self::MOON);
    }

    public function scopePlanets($query)
    {
        return $query->where('groupID', self::PLANET);
    }

    public function scopeRegions($query)
    {
        return $query->where('groupID', self::REGION);
    }

    public function scopeSystems($query)
    {
        return $query->where('groupID', self::SYSTEM);
    }

    public function scopeUbiquitous($query)
    {
        return $query->whereHas('moon_content', function($sub){
            $sub->where('margetGroupId', self::UBIQUITOUS);
        });
    }

    public function scopeCommon($query)
    {
        return $query->whereHas('moon_content', function($sub){
            $sub->where('margetGroupId', self::COMMON);
        });
    }

    public function scopeUncommon($query)
    {
        return $query->whereHas('moon_content', function($sub){
            $sub->where('margetGroupId', self::UNCOMMON);
        });
    }

    public function scopeRare($query)
    {
        return $query->whereHas('moon_content', function($sub){
            $sub->where('margetGroupId', self::RARE);
        });
    }

    public function scopeStandard($query)
    {
        return $query->whereHas('moon_content', function($sub){
            $sub->where('margetGroupId', self::UBIQUITOUS);
        });
    }

    public function constellation(){
        return $this->belongsTo(MapDenormalize::class, 'constellationID', 'itemID', 'constellations')
            ->withDefault([
                'itemName'=> 'Unknown'
            ]);
    }

    public function moon_content()
    {
        return $this->blongsToMany(InvType::class, 'universe_moon_contents', 'moon_id', 'type_id')
            ->withPivot('rate');
    }

    public function planet()
    {
        return $this->belongsTo(MapDenormalize::class, 'orbitID', 'itemID', 'planets')
            ->withDefault([
                'itemName' => 'Unknown'
            ]);
    }

    public function region()
    {
        return $this->blongsTo(MapDenormalize::class, 'regionID', 'itemID', 'regions')
            ->withDefault([
                'itemName'=> 'Unknown',
            ]);
    }

    public function sovereignty()
    {
        //return $this->hasOne(SovereigntyMap::class, '')
        //TODO: Implement Sovereignty
    }

    public function type()
    {
        return $this->belongsTo(InvType::class, 'typeID', 'typeID');
    }

    public function getMoonIndicatorsAttributes()
    {
        if(is_null($this->moon_indicators)){
            $this->moon_indicators = (object) [
                'ubiquitous' => $this->moon_content->filter(function ($type) {
                    return $type->marketGroupId == 2396;
                })->count(),
                'common'    => $this->moon_content->filter(function ($type){
                    return $type->marketGroupId == 2397;
                })->count(),
                'uncommon'  => $this->moon_content->filter(function ($type) {
                    return $type->marketGroupId == 2398;
                })->count(),
                'rare'      => $this->moon_content->filter(function ($type) {
                    return $type->marketGroupId == 2400;
                })->count(),
                'exceptional'   => $this->moon_content->filter(function ($type){
                    return $type->marketGroupId == 2401;
                })->count(),
                'standard'  => $this->moon_content->filter(function ($type){
                    return ! in_array($type->marketGroupId, [2396, 2397, 2398, 2400, 2401]);
                })->count()
            ];
        }

        return $this->moon_indicators ?: (object) [
            'ubiquitous' => 0,
            'common' => 0,
            'uncommon' => 0,
            'rare'  => 0,
            'exceptional'=> 0,
            'standard'  => 0
        ];
    }

    public function getStructureIdAttribute()
    {
        return $this->structure_id;
    }

    public function getNameAttribute()
    {
        return $this->itemName;
    }

    public function isConstellation(): bool
    {
        return $this->groupID === self::CONSTELLATION;
    }

    public function isRegion(): bool
    {
        return $this->groupID === self::REGION;
    }

    public function isSystem(): bool
    {
        return $this->groupID === self::SYSTEM;
    }

    public function isSun(): bool
    {
        return $this->groupID === self::SUN;
    }

    public function isMoon(): bool
    {
        return $this->groupID === self::PLANET;
    }

    public function isPlanet(): bool
    {
        return $this->groupID === self::PLANET;
    }
}