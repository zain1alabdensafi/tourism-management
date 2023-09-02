<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class offer_roomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('offerroom')->insert([
            'hotel_id'=>1,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => ' wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'old_price' => 315,
            'new_price'=> 270,
            'number_of_person' => 4,
            'is_available' => true,
        ]);
        DB::table('offerroom')->insert([
            'hotel_id'=>2,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax ,Hairdryer,DVD Player,Office',
            'old_price' => 315,
            'new_price'=>250,
            'number_of_person' => 4,
            'is_available' => true,
        ]);

    }
}
