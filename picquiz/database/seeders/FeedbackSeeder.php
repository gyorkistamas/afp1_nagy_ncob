<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::create([
            'creator' => '2',
            'title' => 'Teszt',
            'message' => 'Ez egy teszt visszajelzés.'
        ]);

        Feedback::create([
            'creator' => '2',
            'title' => 'Teszt 2',
            'message' => 'Ez egy másik teszt visszajelzés.'
        ]);
    }
}
