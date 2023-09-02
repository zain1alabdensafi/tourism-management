<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('airports')->insert([
            'country_id'=>1,
            'city_id'=>1,
            'name'=>'Damascus International Airport'
        ]);
        DB::table('airports')->insert([
            'country_id'=>1,
            'city_id'=>5,
            'name'=>'Aleppo International Airport'
        ]);
        DB::table('airports')->insert([
            'country_id'=>2,
            'city_id'=>6,
            'name'=>'Abu Dhabi International Airport'
        ]);
        DB::table('airports')->insert([
            'country_id'=>2,
            'city_id'=>7,
            'name'=>'Dubai International Airport'
        ]);
        DB::table('airports')->insert([
            'country_id'=>2,
            'city_id'=>8,
            'name'=>'Sharjah International Airport'
        ]);
        DB::table('airports')->insert([
            'country_id'=>2,
            'city_id'=>9,
            'name'=>'Ajman International Airport'
        ]);
        DB::table('airports')->insert([
            'country_id'=>3,
            'city_id'=>10,
            'name'=>'London Heathrow Airport'
        ]);
        DB::table('airports')->insert([
            'country_id'=>4,
            'city_id'=>11,
            'name'=>'Paris Charles de Gaulle Airport'
        ]);
    }
}
