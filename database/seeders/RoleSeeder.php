<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Superadmin role
          DB::table('roles')->insert([
            'name' => 'superadmin',
            'store_id' =>0,
        ]);

        // Normal user
        DB::table('roles')->insert([
            'name' => 'user',
            'store_id' =>0,
        ]);
        // Admin 
        DB::table('roles')->insert([
            'name' => 'admin',
            'store_id' =>0,
        ]);
    }
}
