<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'admin1',
            'email' => 'admin123@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password1234'),
            'remember_token' => Str::random(10),
        ]);
    }
}
