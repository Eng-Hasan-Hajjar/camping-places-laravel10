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
          'role'=>'admin',
        ]);
        \App\Models\User::create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'password'=>'123456789',
            'role'=>'visitor',
          ]);
          \App\Models\User::create([
            'name' => 'Test User 3',
            'email' => 'test3@example.com',
            'password'=>'123456789',
          ]);

          \App\Models\Doctor::create([
            'name' => 'Test Doctor ',
            'phone' => '0933912076',
            'is_free'=>'0',
            'specialty'=>'قلبية',
          ]);
          \App\Models\Doctor::create([
            'name' => 'Test Doctor 2',
            'phone' => '0933912076',
            'is_free'=>'1',
            'specialty'=>'داخلية',
          ]);

          \App\Models\Doctor::create([
            'name' => 'Test Doctor 3',
            'phone' => '0933912076',
            'is_free'=>'1',
            'specialty'=>'جراحة عامة',
          ]);
          \App\Models\Doctor::create([
            'name' => 'Test Doctor 4',
            'phone' => '0933912076',
            'is_free'=>'1',
            'specialty'=>'داخلية',
          ]);
          \App\Models\Guide::create([
            'name' => 'Test Guid 1',
            'phone' => '0933912076',
            'is_free'=>'1',

          ]);
          \App\Models\Guide::create([
            'name' => 'Test Guid 2',
            'phone' => '0933912076',
            'is_free'=>'1',

          ]);
          \App\Models\Guide::create([
            'name' => 'Test Guid 3',
            'phone' => '0933912076',
            'is_free'=>'1',

          ]);

          \App\Models\CampGround::create([
            'name' => 'بادية الشام',
            'description' => 'من أجمل الأماكن ',
            'country'=>'سوريا',
            'city' => 'تدمر',
            'region' => 'البادية',
            'cm_type'=>'1',
            'cm_season' => '1',
            'campGround_image' => '',
            'google_image'=>'',
            'forecast' => 'غائم جزئي',

          ]);
          \App\Models\CampGround::create([
            'name' => 'بادية سيناء',
            'description' => 'من أجمل الأماكن ',
            'country'=>'مصر',
            'city' => 'سيناء',
            'region' => 'العريش',
            'cm_type'=>'1',
            'cm_season' => '1',
            'campGround_image' => '',
            'google_image'=>'',
            'forecast' => 'غائم جزئي',

          ]);
          \App\Models\CampGround::create([
            'name' => 'غابات الأمازون',
            'description' => 'من أجمل الأماكن ',
            'country'=>'البرازيل',
            'city' => 'سامباولو',
            'region' => 'سامبو',
            'cm_type'=>'2',
            'cm_season' => '1',
            'campGround_image' => '',
            'google_image'=>'',
            'forecast' => 'غائم جزئي',

          ]);


    }
}
