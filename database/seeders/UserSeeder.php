<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   // seeder for the super admin
        $user = new User();
        $user->name = "elsa";
        $user->email = "elsashrestha58@gmail.com";
        $user->password = Hash::make("123456789");
        $user->address = "pokhara";
        $user->role_id = 1;
        $user->save();
    }
    
}
