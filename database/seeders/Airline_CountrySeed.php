<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Airline_CountrySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('airline_country')->insert([
            'country_id'=>1,
            'airline_id'=>1
        ]);
        DB::table('airline_country')->insert([
            'country_id'=>2,
            'airline_id'=>1
        ]);
        DB::table('airline_country')->insert([
            'country_id'=>3,
            'airline_id'=>1
        ]);
        DB::table('airline_country')->insert([
            'country_id'=>4,
            'airline_id'=>1
        ]);
    }
}
