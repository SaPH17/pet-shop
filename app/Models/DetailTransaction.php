<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    public $incrementing = false;

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function pet(){
        return $this->belongsTo(Pet::class);
    }
}
