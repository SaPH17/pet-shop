<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $incrementing = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pet(){
        return $this->belongsTo(Pet::class);
    }
}
