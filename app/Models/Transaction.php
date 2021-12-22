<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory, HasUuid;
    protected $guarded = [];
    public $incrementing = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function detail_transaction(){
        return $this->hasMany(DetailTransaction::class);
    }
}
