<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//DB::table('users')->insert([
		//	'name' => 'anon',
		//	'email' => 'anon@anon.anon',
		//	'password' => md5('passwd')
		//]);

        User::create([
            'username' => 'admin',
            'email' => 'admin@ncob.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_picture' => '/images/samplePictures/Sample_User_Icon.png',
            'isAdmin' => '1'
        ]);

        User::create([
            'username' => 'normalUser',
            'email' => 'normal@ncob.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_picture' => '/images/samplePictures/Sample_User_Icon.png',
        ]);

    }
}
