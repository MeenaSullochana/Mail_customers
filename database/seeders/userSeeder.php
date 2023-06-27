<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {DB::table("users")->insert([
            'name'=>'Meenakshi',
            'email'=>'meena@gmail.com',
            'password'=>Hash::make('meena'),
            'role'=>'admin',
            'address'=>'Trichy',
            'phone'=>'3456789765',
            "image"=>"flskdjfalf",
            "active"=>"Yes"

        ]);
        }
    }
}
