<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'stock',
        'store_id',
        'image_id',
        'slug',
        'rating',
        'cost_price',
        'quantity_sold',
        'child_category_id',
        

    ];
    public function store()
    {
        return $this->belongsTo(store::class);
    }
    public function image()
    {
        return $this->belongsTo(file::class);
    }
}
