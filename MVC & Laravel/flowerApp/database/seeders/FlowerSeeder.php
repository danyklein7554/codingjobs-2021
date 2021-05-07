<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerSeeder extends Seeder
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
                'name' => 'Tulip',
                'price' => '1.50',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ], [
                'name' => 'Rose',
                'price' => '3',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ], [
                'name' => 'Violet',
                'price' => '1',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ]
        ]);
    }
}
