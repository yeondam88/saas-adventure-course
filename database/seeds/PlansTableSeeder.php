<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'basic',
            'description' => 'The basic plan allows you to create 1 course with unlimited students'
        ]);

        DB::table('plans')->insert([
            'name' => 'plus',
            'description' => 'The plus plan allows you to create 5 courses with unlimited students'
        ]);

        DB::table('plans')->insert([
            'name' => 'pro',
            'description' => 'The pro plan allows you to create up to 10 courses with unlimited students'
        ]);
    }
}