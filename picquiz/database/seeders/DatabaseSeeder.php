<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

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

        // \App\Models\User::factory()->create([
        //     'username' => 'admin',
        //     'email' => 'admin@ncob.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_picture' => 'images/samplePictures/Sample_User_Icon.png',
        //     'isAdmin' => '1'
        // ]);

        User::create([
            'username' => 'admin',
            'email' => 'admin@ncob.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_picture' => 'images/samplePictures/Sample_User_Icon.png',
            'isAdmin' => '1'
        ]);

        User::create([
            'username' => 'normalUser',
            'email' => 'normal@ncob.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_picture' => 'images/samplePictures/Sample_User_Icon.png',
        ]);
    }
}
