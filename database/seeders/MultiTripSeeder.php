<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MultiTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Damascus International Airport to Abu Dhabi International Airport Then to the London Heathrow Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Damascus International Airport to Dubai International Airport Then to the London Heathrow Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Damascus International Airport to Sharjah International Airport  Then to the London Heathrow Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Damascus International Airport to Ajman International Airport  Then to the London Heathrow Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        //London->Damascus
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'London',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From London Heathrow Airport to Abu Dhabi International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'London',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From London Heathrow Airport to Dubai International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'London',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From London Heathrow Airport to Sharjah International Airport  Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'London',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From London Heathrow Airport to Ajman International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        ///////////////////////////////////////////////////////////////////////////////
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Damascus International Airport to Abu Dhabi International Airport Then to the London Heathrow Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Damascus International Airport to Dubai International Airport Then to the London Heathrow Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Damascus International Airport to Sharjah International Airport  Then to the London Heathrow Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'London',
            'arrival_airport'=>'London Heathrow Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Damascus International Airport to Ajman International Airport  Then to the London Heathrow Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        //London->Damascus
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'London',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From London Heathrow Airport to Abu Dhabi International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'London',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From London Heathrow Airport to Dubai International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'London',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From London Heathrow Airport to Sharjah International Airport  Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>7,
            'source'=>'London',
            'departure_airport'=>'London Heathrow Airport',
            'destination'=>'London',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From London Heathrow Airport to Ajman International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        //Paris
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Damascus International Airport to Abu Dhabi International Airport Then to the Paris Charles de Gaulle Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Damascus International Airport to Dubai International Airport Then to the Paris Charles de Gaulle Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Damascus International Airport to Sharjah International Airport  Then to the Paris Charles de Gaulle Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Damascus International Airport to Ajman International Airport  Then to the Paris Charles de Gaulle Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        //Paris->Damascus
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Paris Charles de Gaulle Airport to Abu Dhabi International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Paris Charles de Gaulle Airport to Dubai International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Paris Charles de Gaulle Airport to Sharjah International Airport  Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 AM',
            'ending_time'=>'08:00:00 PM',
            'path_trip'=>'Starting From Paris Charles de Gaulle Airport to Ajman International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        ///////////////////////////////////////////////////////////////////////////////
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Damascus International Airport to Abu Dhabi International Airport Then to the Paris Charles de Gaulle Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Damascus International Airport to Dubai International Airport Then to the Paris Charles de Gaulle Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Damascus International Airport to Sharjah International Airport  Then to the Paris Charles de Gaulle Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>1,
            'source'=>'Damascus',
            'departure_airport'=>'Damascus International Airport',
            'destination'=>'Paris',
            'arrival_airport'=>'Paris Charles de Gaulle Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Damascus International Airport to Ajman International Airport  Then to the Paris Charles de Gaulle Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        //Paris->Damascus
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Paris Charles de Gaulle Airport to Abu Dhabi International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Paris Charles de Gaulle Airport to Dubai International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Paris Charles de Gaulle Airport to Sharjah International Airport  Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
        DB::table('multi_trips')->insert([
            'airline_id'=>1,
            'airport_id'=>8,
            'source'=>'Paris',
            'departure_airport'=>'Paris Charles de Gaulle Airport',
            'destination'=>'Damascus',
            'arrival_airport'=>'Damascus International Airport',
            'starting_time'=>'10:00:00 PM',
            'ending_time'=>'08:00:00 AM',
            'path_trip'=>'Starting From Paris Charles de Gaulle Airport to Ajman International Airport Then to the Damascus International Airport',
            'number_of_person'=>50,
            'is_available'=>true,
            'count'=>0
        ]);
    }
}
