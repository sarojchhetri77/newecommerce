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
        'stoke',
        'store_id',
        'image_id'
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
