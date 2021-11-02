<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pets(){
        return $this->hasMany(Pet::class);
    }
}
