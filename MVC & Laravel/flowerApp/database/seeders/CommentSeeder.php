<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            [
                'subject' => 'Great tulip',
                'message' => 'Its the best tulip I ever saw',
                'flower_id' => 1,
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'subject' => 'Crap!',
                'message' => 'Crap quality',
                'flower_id' => 2,
                'created_at' => date(now()),
                'updated_at' => date(now())
            ]
        ]);
    }
}
