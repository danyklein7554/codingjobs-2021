<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Harry Potter',
            'price' => 10,
            'author_id' => 1
        ]);

        DB::table('books')->insert([
            'title' => 'Harry Potter 2',
            'price' => 11,
            'author_id' => 1
        ]);
    }
}
