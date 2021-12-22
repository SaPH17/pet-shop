<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetCategory extends Model
{
    use HasFactory, HasUuid;
    protected $guarded = [];
    public $incrementing = false;

    public function pets(){
        return $this->hasMany(Pet::class);
    }
}
