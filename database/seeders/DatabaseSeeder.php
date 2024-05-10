<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
             \App\Models\User::create([
          'name' => 'Test User',
          'email' => 'test@example.com',
          'password'=>'123456789',
        ]);
        \App\Models\User::create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'password'=>'123456789',
          ]);
          \App\Models\User::create([
            'name' => 'Test User 3',
            'email' => 'test3@example.com',
            'password'=>'123456789',
          ]);
    }
}
