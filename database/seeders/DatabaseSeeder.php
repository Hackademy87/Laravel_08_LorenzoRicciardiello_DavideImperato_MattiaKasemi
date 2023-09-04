<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Lorenzo',
            'email' => 'lollo@lollo.com',
            'password'=> Hash::make('lollo9511')
        ]);

        User::factory()->create([
            'name' => 'Davide',
            'email' => 'davide@davide.com',
            'password'=> Hash::make('davide999')
        ]);
        
Profile::create([
    'role'=> 'admin',
    'nickname'=> 'nick',
    'user_id'=> 1
]);

Profile::create([
    'role'=> 'user',
    'nickname'=> 'nick',
    'user_id'=> 2
]);

    }
}
