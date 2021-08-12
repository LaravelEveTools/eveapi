<?php

namespace LaravelEveTools\EveApi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RefreshToken extends Model
{
    use SoftDeletes;

    const CURRENT_VERSION = 2;

    protected $attributes = [
        'version' => self::CURRENT_VERSION,
    ];

    protected $casts = [
        'scopes' => 'array',
    ];

    protected $dates = ['expires_on', 'deleted_at'];

    protected $fillable = [
        'character_id', 'version', 'user_id', 'scopes', 'expired_on', 'token', 'character_owner_hash'
    ];

    public $incrementing = false;

    protected $primaryKey = 'character_id';

    protected $table = 'refresh_tokens';



}