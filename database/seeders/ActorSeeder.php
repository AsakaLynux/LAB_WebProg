<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
            [
                'name' => 'Michael B. Jordan',
                'gender' => 'Male',
                'biography' => 'Michael Bakari Jordan is an American actor. He is known for his film roles as shooting victim Oscar Grant in the drama Fruitvale Station, boxer Donnie Creed in Creed, and Erik Killmonger in Black Panther.',
                'dob' => '1987/02/09',
                'place_of_birth' => 'Santa Ana, California, U.S',
                'image_url' => 'storage/images/assets/michael-b-jordan.jpg',
                'popularity' => '200',
            ],
            [
                'name' => 'Lupita Nyong',
                'gender' => 'Female',
                'biography' => 'Lupita Amondi Nyong\'o is a Kenyan-Mexican actress. She is the recipient of several accolades, including an Academy Award, and nominations for two Primetime Emmy Awards and a Tony Award.',
                'dob' => '1983/03/01',
                'place_of_birth' => 'Mexico City, Mexico, U.S',
                'image_url' => 'storage/images/assets/lupita-nyongo.jpg',
                'popularity' => '400',
            ],
        ]);
    }
}
