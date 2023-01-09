<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('movies')->insert([
          [
            'title' => 'Avatar: The Way of Water',
            'description' => 'Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na\'vi race to protect their home.',
            'genre' => 'Action',
            'actor' => 'abc',
            'character_name' => 'Jake Sully',
            'director' => 'Mappa',
            'release_date' => '2022-12-20',
            'image_thumbnail' => 'storage/images/assets/avatar-cover.png',
            'background' => 'storage/images/assets/avatar.png',
          ],
          [
            'title' => 'Glass Onion: A Knives Out Mystery',
            'description' => 'Famed Southern detective Benoit Blanc travels to Greece for his latest case.',
            'genre' => 'Comedy',
            'actor' => 'cba',
            'character_name' => 'Benoit Blanc',
            'director' => 'Mappa',
            'release_date' => '2022-11-20',
            'image_thumbnail' => 'storage/images/assets/glass-onion-cover.png',
            'background' => 'storage/images/assets/glass-onion.png',
          ],
          [
            'title' => 'Black Panther: Wakanda Forever',
            'description' => 'The people of Wakanda fight to protect their home from intervening world powers as they mourn the death of King T\'Challa.',
            'genre' => 'Action',
            'actor' => 'weasd',
            'character_name' => 'Jake Sully',
            'director' => 'sdadasd',
            'release_date' => '2022-10-20',
            'image_thumbnail' => 'storage/images/assets/black-panther-cover.png',
            'background' => 'storage/images/assets/black-panther.png',
          ],

        ]);
    }
}
