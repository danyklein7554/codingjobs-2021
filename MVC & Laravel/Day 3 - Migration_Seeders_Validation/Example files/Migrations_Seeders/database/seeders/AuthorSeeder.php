<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'first_name' => 'J.K.',
            'last_name' => 'Rowling',
            'date_of_birth' => '1970-10-20',
            'created_at' => date(now()),
            'updated_at' => date(now())
        ]);

    }
}
