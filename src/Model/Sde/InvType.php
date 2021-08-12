<?php

namespace LaravelEveTools\EveApi\Modes\Sde;

use Illuminate\Database\Eloquent\Model;
use LaravelEveTools\EveApi\Traits\IsReadOnly;

class InvType extends Model
{
    use IsReadOnly;

    public $incrementing = false;

    protected $casts = [
        'published' => 'boolean',
    ];

    protected $table = 'invTypes';

    protected $primaryKey = 'typeID';

    public function materials()
    {
        return $this->belongsToMany(InvType::class, 'invTypeMaterials', 'typeID', 'materialTypeId')
            ->withPivot('quantity');
    }

    public function group(){
        return $this->belongsTo(InvGroup::class, 'groupID', 'groupID')
            ->withDefault([
                'groupName' => 'Unknown'
            ]);
    }

    public function price()
    {
        return $this->hasOne(Price::class, 'type_id', 'typeID')
            ->withDefault([
                'average'=>0.00,
                'average_price' => 0.00,
                'adjusted_price' => 0.00,
            ]);
    }

    public function dogma_attrivutes()
    {
        return $this->hasMany(DgmTypeAttributes::class, 'typeID', 'typeID');
    }

    public function reactions()
    {
        return $this->belongsToMany(InvType::class, 'invTypeReactions', 'typeID', 'reactionTypeID')
            ->withPivot('input', 'quantity');
    }

    public function components(){
        return $this->belongsToMany(InvType::class, 'invTypeReactions', 'reactionTypeId', 'typeID')
            ->wherePivot('input', true)
            ->withPivot('input', 'quantity');
    }

}