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
        'status',
    ];
    public function roles(){
    return $this -> HasMany(role::class);
    }
    public function user(){
    return $this -> belongsTo(user::class);
    }
   
}
