<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class EngageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('request_for_greetings') -> insert([
            'shoutout_title' => Str::random(10),
            'name' => Str::random(10),
            'email' => Str::random(10),
            'description' => Str::random(20)
        ]);
    }
}
