<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Image_citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Damascus
      DB::table('image_cities')->insert([
          'city_id'=>1,
          'image'=>Storage::url('image/Damascus1.jpg')
      ]);
        DB::table('image_cities')->insert([
            'city_id'=>1,
            'image'=>Storage::url('image/Damascus2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>1,
            'image'=>Storage::url('image/Damascus3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>1,
            'image'=>Storage::url('image/Damascus4.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>1,
            'image'=>Storage::url('image/Damascus5.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>1,
            'image'=>Storage::url('image/Damascus6.jpg')
        ]);
        //Tartus
        DB::table('image_cities')->insert([
            'city_id'=>2,
            'image'=>Storage::url('image/tartous1.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>2,
            'image'=>Storage::url('image/tartous2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>2,
            'image'=>Storage::url('image/tartous3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>2,
            'image'=>Storage::url('image/tartous4.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>2,
            'image'=>Storage::url('image/tartous5.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>2,
            'image'=>Storage::url('image/tartous6.jpg')
        ]);
        //Latakia
        DB::table('image_cities')->insert([
            'city_id'=>3,
            'image'=>Storage::url('image/Latakia1.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>3,
            'image'=>Storage::url('image/Latakia2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>3,
            'image'=>Storage::url('image/Latakia3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>3,
            'image'=>Storage::url('image/Latakia4.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>3,
            'image'=>Storage::url('image/Latakia5.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>3,
            'image'=>Storage::url('image/Latakia6.jpg')
        ]);
        //Homs
        DB::table('image_cities')->insert([
            'city_id'=>4,
            'image'=>Storage::url('image/Homs1.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>4,
            'image'=>Storage::url('image/Homs2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>4,
            'image'=>Storage::url('image/Homs3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>4,
            'image'=>Storage::url('image/Homs4.jpg')
        ]);
        //Aleppo
        DB::table('image_cities')->insert([
            'city_id'=>5,
            'image'=>Storage::url('image/Aleppo1.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>5,
            'image'=>Storage::url('image/Aleppo2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>5,
            'image'=>Storage::url('image/Aleppo3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>5,
            'image'=>Storage::url('image/Aleppo4.jpg')
        ]);
        //Emirate of Abu Dhabi
        DB::table('image_cities')->insert([
            'city_id'=>6,
            'image'=>Storage::url('image/Emirate of Abu Dhabi1.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>6,
            'image'=>Storage::url('image/Emirate of Abu Dhabi2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>6,
            'image'=>Storage::url('image/Emirate of Abu Dhabi3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>6,
            'image'=>Storage::url('image/Emirate of Abu Dhabi4.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>6,
            'image'=>Storage::url('image/Emirate of Abu Dhabi5.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>6,
            'image'=>Storage::url('image/Emirate of Abu Dhabi6.jpg')
        ]);

        //Emirate of Dubai
        DB::table('image_cities')->insert([
            'city_id'=>7,
            'image'=>Storage::url('image/Emirate of Dubai1.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>7,
            'image'=>Storage::url('image/Emirate of Dubai2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>7,
            'image'=>Storage::url('image/Emirate of Dubai3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>7,
            'image'=>Storage::url('image/Emirate of Dubai4.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>7,
            'image'=>Storage::url('image/Emirate of Dubai5.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>7,
            'image'=>Storage::url('image/Emirate of Dubai6.jpg')
        ]);
        //Emirate of sharjah
        DB::table('image_cities')->insert([
            'city_id'=>8,
            'image'=>Storage::url('image/Emirate of Sharjah1.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>8,
            'image'=>Storage::url('image/Emirate of Sharjah2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>8,
            'image'=>Storage::url('image/Emirate of Sharjah3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>8,
            'image'=>Storage::url('image/Emirate of Sharjah4.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>8,
            'image'=>Storage::url('image/Emirate of Sharjah5.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>8,
            'image'=>Storage::url('image/Emirate of Sharjah6.jpg')
        ]);
        //Emirate of Ajman
        DB::table('image_cities')->insert([
            'city_id'=>9,
            'image'=>Storage::url('image/Emirate of Ajman1.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>9,
            'image'=>Storage::url('image/Emirate of Ajman2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>9,
            'image'=>Storage::url('image/Emirate of Ajman3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>9,
            'image'=>Storage::url('image/Emirate of Ajman4.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>9,
            'image'=>Storage::url('image/Emirate of Ajman5.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>9,
            'image'=>Storage::url('image/Emirate of Ajman6.jpg')
        ]);
        //London
        DB::table('image_cities')->insert([
            'city_id'=>10,
            'image'=>Storage::url('image/London1.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>10,
            'image'=>Storage::url('image/London2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>10,
            'image'=>Storage::url('image/London3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>10,
            'image'=>Storage::url('image/London4.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>10,
            'image'=>Storage::url('image/London5.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>10,
            'image'=>Storage::url('image/London6.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>10,
            'image'=>Storage::url('image/London7.jpg')
        ]);
        //Paris
        DB::table('image_cities')->insert([
            'city_id'=>11,
            'image'=>Storage::url('image/Paris1.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>11,
            'image'=>Storage::url('image/Paris2.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>11,
            'image'=>Storage::url('image/Paris3.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>11,
            'image'=>Storage::url('image/Paris4.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>11,
            'image'=>Storage::url('image/Paris5.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>11,
            'image'=>Storage::url('image/Paris6.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>11,
            'image'=>Storage::url('image/Paris7.jpg')
        ]);
        DB::table('image_cities')->insert([
            'city_id'=>11,
            'image'=>Storage::url('image/Paris8.jpg')
        ]);
    }
}
