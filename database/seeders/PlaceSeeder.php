<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('places')->insert([
            'name' => Str::random(10),
            'slug' => Str::random(10),
            'image'=>'1.png',
            'category_id'=>1,
            'overview'=>Str::random(10),
            'adderss'=>Str::random(10),
            'user_id'=>5,
            'latitude'=>3434,3434,
            'longitude'=>343434,3434,
            'view_count'=>3,


        ]);
      

        
    }
}


