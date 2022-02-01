<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        # Create the Administrator
        User::factory()->create([
            "name" => "System Admin",
            "email" => 'collins@zalego.com',
            "phone_number"=>'+254790366848',
            "cover_image" =>NULL,
            "password" => Hash::make("admin@1234"),
            "role" => 'admin'
        ]);
    }
}
