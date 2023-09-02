<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AirlineSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('airlines')->insert([
            'name' => 'Emirates Airlines',
            'description' => 'Emirates Airlines is a leading airline based in Dubai, United Arab Emirates, offering a wide range of international flights.',
            'phone' => '+971 4 214 4444',
            'rate' => 4.8,
            'logo' => Storage::url('image/fly emirate.jpg'),
            'website' => 'https://www.emirates.com/'
        ]);
    }
}
