<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        $this->call([
            UserSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            HotelSeeder::class,
            RoomSeeder::class,
            ImageSeeder::class,
            offer_roomSeeder::class,
            BankSeeder::class,
            AccountSeeder::class,
            RestaurantSeeder::class,
            PlacesSeeder::class,
            imageplaceseeder::class,
            Image_citySeeder::class,
            AirlineSeed::class,
            Airline_CountrySeed::class,
            AirportSeed::class,
            SingleTripSeeder::class,
            SingleTicketSeeder::class,
            MultiTripSeeder::class,
            MultiTickettSeeder::class,

        ]);
    }
}
