<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'genre' => 'Action'
            ],
            [
                'genre' => 'Animation'
            ],
            [
                'genre' => 'Comedy'
            ],
            [
                'genre' => 'Crime'
            ],
            [
                'genre' => 'Drama'
            ],
            [
                'genre' => 'Experimental'
            ],
            [
                'genre' => 'Fantasy'
            ],
            [
                'genre' => 'Historical'
            ],
            [
                'genre' => 'Science Fiction'
            ],
            [
                'genre' => 'Thriller'
            ],
            [
                'genre' => 'Western'
            ],
            [
                'genre' => 'Horror'
            ],
            [
                'genre' => 'Romance'
            ],
        ]);
    }
}
