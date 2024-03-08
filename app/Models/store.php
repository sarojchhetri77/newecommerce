<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class store extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'email',
        'name',
        'slug',
        'status',
    ];
    public function roles(){
    return $this -> HasMany(role::class);
    }
    public function user(){
    return $this -> belongsTo(User::class);
    }
   public function products(){
    return $this -> hasMany(product::class);
   }
   public function images(){
    return $this -> hasMany(file::class);
   }
   public function child_categories(){
    return $this -> hasMany(child_category::class);
   }
   public function users()
   {
       return $this->belongsToMany(User::class, 'user_stores', 'store_id', 'user_id');
   }
}
