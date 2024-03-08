<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable =[
        'title'
    ];
    public function child_categories(){
        return $this->hasMany(child_category::class);
    }
}
