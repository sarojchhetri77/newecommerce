<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'store_id',
    ];
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function store(){
        return $this->belongsTo(store::class);
    }
}
