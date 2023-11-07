<?php
namespace App\Traits;

use Illuminate\Support\Facades\App;

trait ModelsTrait
{
    public static function bootModelsTrait()
    {
        static::creating(function ($model) {
            $model->lang = App::getLocale();
        });

        static::updating(function ($model) {
            $model->lang = App::getLocale();
        });

    }
}
