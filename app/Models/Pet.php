<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pet_category(){
        return $this->belongsTo(PetCategory::class);
    }

    public function detail_transactions(){
        return $this->hasMany(DetailTransaction::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

}
