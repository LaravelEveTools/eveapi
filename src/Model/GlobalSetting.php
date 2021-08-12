<?php

namespace LaravelEveTools\EveApi\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalSetting extends Model
{

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'value'];
}