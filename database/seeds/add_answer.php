<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_answer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers2')->insert([
        	'answers' => 201,
        	'guild' => 'izzet'
        ]);

    }
}
