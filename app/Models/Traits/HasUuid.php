<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasUuid {
    protected static function boot(){
        parent::boot();

        static::creating(function($model){
            if(empty($model->{$model->getKeyName()})){
                $model->{$model->getKeyName()} = Str::uuid();
            }
        });
    }
}