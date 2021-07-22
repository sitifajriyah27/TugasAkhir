<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        return User::create([
            'nama'=>'admin',
            'email'=>'admin@gmail.com',
            'username'=>'admin',
            'password'=>Hash::make('123456789'),
            'level'=>'admin',
        ]);
    }
}
