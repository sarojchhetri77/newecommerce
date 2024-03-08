<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class child_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'store_id',
    ];
    public function products(){
        return $this->hasMany(product::class);
    }
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function store(){
        return $this->belongsTo(store::class);
    }
}
