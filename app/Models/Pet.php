<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory, HasUuid;
    protected $guarded = [];
    public $incrementing = false;

    public function pet_category(){
        return $this->belongsTo(PetCategory::class);
    }

    public function detail_transactions(){
        return $this->hasMany(DetailTransaction::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function forums(){
        return $this->hasMany(Forum::class)->orderBy('created_at', 'desc');
    }

}
