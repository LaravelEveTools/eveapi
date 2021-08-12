<?php
namespace LaravelEveTools\EveApi\Settings;

use LaravelEveTools\EveApi\Models\GlobalSetting;

class EveApi extends Settings
{

    public static $options = [];


    protected static $model = GlobalSetting::class;


    protected static $scope = 'global';

    protected static $defaults = [
        'installed_sde' => null,
    ];
}