<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('la_admin')->insert([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'staff_name' => 'Admin',
            'is_delete' => 0
        ]);
    }
}
