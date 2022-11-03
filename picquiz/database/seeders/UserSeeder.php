<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('admin'),
            'profile_picture' => '/images/samplePictures/Sample_User_Icon.png',
            'isAdmin' => '1'
        ]);

        User::create([
            'username' => 'normalUser',
            'email' => 'normal@ncob.com',
            'password' => Hash::make('normaluser'),
            'profile_picture' => '/images/samplePictures/Sample_User_Icon.png',
        ]);

        User::create([
            'username' => 'anon',
            'email' => 'anon@anon.anon',
            'password' => Hash::make('anon'),
            'profile_picture' => 'images/uploads/users/0IFeydcWKq3ZZ1lfSAxbIryOtoL1sxpcxpq00yJB.jpg',
        ]);

    }
}
