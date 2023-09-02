<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SingleTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Abu Dhabi',
            'arrival_airport'=>'Abu Dhabi International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'01:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Abu Dhabi',
            'arrival_airport'=>'Abu Dhabi International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'01:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Dubai',
            'arrival_airport'=>'Dubai International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'01:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Dubai',
            'arrival_airport'=>'Dubai International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'01:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'sharjah',
            'arrival_airport'=>'sharjah International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'01:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'sharjah',
            'arrival_airport'=>'sharjah International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'01:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Ajman',
            'arrival_airport'=>'Ajman International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'01:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Ajman',
            'arrival_airport'=>'Ajman International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'01:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        //Emirate->Damascus
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>3,
            'source'=>'Abu Dhabi',
            'departure_airport'=>'Abu Dhabi International Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=> '10:00:00 AM',
            'ending_time'=>'01:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>3,
            'source'=>'Abu Dhabi',
            'departure_airport'=>'Abu Dhabi International Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'01:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>4,
            'source'=>'Dubai',
            'departure_airport'=>'Dubai International Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=> '10:00:00 AM',
            'ending_time'=>'01:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>4,
            'source'=>'Dubai',
            'departure_airport'=>'Dubai International Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'01:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>5,
            'source'=>'Sharjah',
            'departure_airport'=>'Sharjah International Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=> '10:00:00 AM',
            'ending_time'=>'01:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>5,
            'source'=>'Sharjah',
            'departure_airport'=>'Sharjah International Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'01:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>6,
            'source'=>'Ajman',
            'departure_airport'=>'Ajman International Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=> '10:00:00 AM',
            'ending_time'=>'01:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>6,
            'source'=>'Ajman',
            'departure_airport'=>'Ajman International Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'01:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        //London->Emirate
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'Abu Dhabi',
            'arrival_airport'=>'Abu Dhabi International Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'Abu Dhabi',
            'arrival_airport'=>'Abu Dhabi International Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'Dubai',
            'arrival_airport'=>'Dubai International Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'Dubai',
            'arrival_airport'=>'Dubai International Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'sharjah',
            'arrival_airport'=>'sharjah International Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'sharjah',
            'arrival_airport'=>'sharjah International Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'Ajman',
            'arrival_airport'=>'Ajman International Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'Ajman',
            'arrival_airport'=>'Ajman International Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
            ]);
        //Paris->Emirate
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Abu Dhabi',
            'arrival_airport'=>'Abu Dhabi International Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Abu Dhabi',
            'arrival_airport'=>'Abu Dhabi International Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Dubai',
            'arrival_airport'=>'Dubai International Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Dubai',
            'arrival_airport'=>'Dubai International Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'sharjah',
            'arrival_airport'=>'sharjah International Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'sharjah',
            'arrival_airport'=>'sharjah International Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Ajman',
            'arrival_airport'=>'Ajman International Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Ajman',
            'arrival_airport'=>'Ajman International Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        //Emirate->London
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>3,
            'source'=>'Abu Dhabi',
            'departure_airport'=>'Abu Dhabi International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>3,
            'source'=>'Abu Dhabi',
            'departure_airport'=>'Abu Dhabi International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>4,
            'source'=>'Dubai',
            'departure_airport'=>'Dubai International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>4,
            'source'=>'Dubai',
            'departure_airport'=>'Dubai International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>5,
            'source'=>'sharjah',
            'departure_airport'=>'sharjah International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>5,
            'source'=>'sharjah',
            'departure_airport'=>'sharjah International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>6,
            'source'=>'Ajman',
            'departure_airport'=>'Ajman International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>6,
            'source'=>'Ajman',
            'departure_airport'=>'Ajman International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        //Emirate->Paris
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>3,
            'source'=>'Abu Dhabi',
            'departure_airport'=>'Abu Dhabi International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>3,
            'source'=>'Abu Dhabi',
            'departure_airport'=>'Abu Dhabi International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>4,
            'source'=>'Dubai',
            'departure_airport'=>'Dubai International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>4,
            'source'=>'Dubai',
            'departure_airport'=>'Dubai International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>5,
            'source'=>'sharjah',
            'departure_airport'=>'sharjah International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>5,
            'source'=>'sharjah',
            'departure_airport'=>'sharjah International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>6,
            'source'=>'Ajman',
            'departure_airport'=>'Ajman International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'01:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'number_of_person'=>50,
            'is_available'=>true,
        ]);
        DB::table('single_trips')->insert([
            'airline_id'=> 1,
            'airport_id'=>6,
            'source'=>'Ajman',
            'departure_airport'=>'Ajman International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=> '01:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);

    }
}
