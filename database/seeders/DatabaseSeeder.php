<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'username' => 'irfan',
            'email' => 'irfan@gmail.com',
            'phone' => '081316277977',
            'dob' => '2002-04-21',
            'password' => bcrypt('irfan123'),
        ]);
        DB::table('users')->insert([
            'username' => 'AsakaLynux',
            'email' => 'asakalynux@gmail.com',
            'phone' => '081316277977',
            'dob' => '2002-02-21',
            'password' => bcrypt('asaka123'),
        ]);

        $this->call(GenreSeeder::class);
    }
}
