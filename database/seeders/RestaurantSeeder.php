<?php

namespace Database\Seeders;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RestaurantSeeder extends Seeder
{

    public function run(): void
    {
        //                              Damascuse
        //Beit Jabri
            DB::table('restaurants')->insert([
                'city_id'=>1,
                'name'=> 'Beit Jabri',
                'address'=> 'Al-Qaimariyya St., Al-Qaimariyya, Damascus',
                'type'=> 'Syrian cuisine',
                'description'=> 'Beit Jabri is a traditional Syrian restaurant located in the heart of Damascus. Its menu features a wide range of authentic Syrian dishes, including grilled meats, mezze, and vegetarian options. The restaurant has a cozy atmosphere and friendly staff, making it a popular choice for locals and tourists alike.',
                'image_profile'=> Storage::url('image/Beit jabri.jpg'),
                'phone'=> +963115420042,
                'rate'=> 4.5
        ]);
        //Roadhouse Grill
        DB::table('restaurants')->insert([
            'city_id'=>1,
            'name'=> 'Roadhouse Grill',
            'address'=> 'Mezzeh Autostrade, Damascus',
            'type'=> 'Steakhouse',
            'description'=> 'Roadhouse Grill is a popular steakhouse in Damascus, known for its high-quality meat and cozy atmosphere. The menu features a variety of grilled meats, salads, and sides, as well as a selection of wines and cocktails.',
            'image_profile'=> Storage::url('image/Roadhouse Grill.jpg'),
            'phone'=> +963116133333,
            'rate'=> 4.0
        ]);
        //Gemini
        DB::table('restaurants')->insert([
            'city_id'=>1,
            'name'=> 'Gemini Restaurant',
            'address'=> 'Al-Mezzah, Damascus',
            'type'=> 'International cuisine',
            'description'=> 'Gemini Restaurant is a stylish restaurant in Damascus that serves a range of international dishes, including Italian, French, and Asian cuisine. The menu features a variety of pasta dishes, seafood, and grilled meats, as well as a selection of cocktails and wines.',
            'image_profile'=> Storage::url('image/Gemini Restaurant.jpg'),
            'phone'=> +963116132222,
            'rate'=> 4.5
        ]);
        //Chevalier
        DB::table('restaurants')->insert([
            'city_id'=>1,
            'name'=> 'Chevalier Restaurant',
            'address'=> 'Old City, Damascus',
            'type'=> 'Syrian cuisine',
            'description'=> 'Chevalier Restaurant is a traditional Syrian restaurant located in the heart of Damascus. Its menu features a variety of authentic Syrian dishes, including grilled meats, mezze, and vegetarian options. The restaurant has a cozy atmosphere and friendly staff, making it a popular choice for locals and tourists alike.',
            'image_profile'=> Storage::url('image/Chevalier Restaurant.jpg'),
            'phone'=> +963115415577,
            'rate'=> 4.0
        ]);
        //Naranj Restaurant
        DB::table('restaurants')->insert([
            'city_id'=>1,
            'name'=> 'Naranj Restaurant',
            'address'=> 'Al-Amin St., Damascus',
            'type'=> 'Syrian cuisine',
            'description'=> 'Naranj Restaurant is a trendy Syrian restaurant located in the heart of Damascus. Its menu features a variety of modern twists on classic Syrian dishes, as well as a selection of creative cocktails and mocktails. The restaurant has a lively atmosphere and is popular with young locals and tourists.',
            'image_profile'=> Storage::url('image/Naranj Restaurant.jpg'),
            'phone'=> +963112324422,
            'rate'=> 4.5
        ]);
        //Jazeel Restaurant
        DB::table('restaurants')->insert([
            'city_id'=>1,
            'name'=> 'Jazeel Restaurant',
            'address'=> 'Al-Salhiyya, Damascus',
            'type'=> 'Lebanese cuisine',
            'description'=> 'Jazeel Restaurant is a Lebanese restaurant located in the heart of Damascus. Its menu features a variety of Lebanese dishes, including grilled meats, mezze, and seafood, as well as a selection of Lebanese wines and arak. The restaurant has a stylish and modern atmosphere, and is popular with both locals and tourists.',
            'image_profile'=> Storage::url('image/Jazeel Restaurant.jpg'),
            'phone'=> +963113322211,
            'rate'=> 4.0
        ]);
        //                                  Tartus
        //Africano Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 2,
            'name'=> 'Africano Restaurant',
            'address'=>'Tartus, Syria',
            'type'=>'African cuisine',
            'description'=>'Africano Restaurant is known for its authentic African cuisine with a variety of dishes to choose from.',
            'image_profile'=> Storage::url('image/Africano Restaurant.jpg'),
            'phone'=> +96343321321,
            'rate' => 4.5
        ]);
        //Sabah Restaurant Tartous
        DB::table('restaurants')->insert([
            'city_id'=> 2,
            'name'=> 'Sabah Restaurant Tartous',
            'address'=>'Tartous, Syria',
            'type'=>'Lebanese cuisine',
            'description'=>'Sabah Restaurant Tartous is a popular Lebanese restaurant that offers a wide range of delicious Lebanese dishes.',
            'image_profile'=>Storage::url('image/Sabah Restaurant Tartous'),
            'phone'=> +96343123456,
            'rate' => 4.2
        ]);
        //Yusha Seafood restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 2,
            'name'=> 'Yusha Seafood restaurant',
            'address'=>'Tartus, Syria',
            'type'=>'Seafood cuisine',
            'description'=>'Yusha Seafood restaurant is a popular seafood restaurant that offers a wide range of fresh and delicious seafood dishes.',
            'image_profile'=>Storage::url('image/Yusha Seafood restaurant.jpg'),
            'phone'=> +96343654321,
            'rate' => 4.7
        ]);
        //Ain Hamza Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 2,
            'name'=> 'Ain Hamza Restaurant',
            'address'=>'Damascus, Syria',
            'type'=>'Syrian cuisine',
            'description'=>'Ain Hamza Restaurant is a popular Syrian restaurant in Damascus that offers a wide range of traditional Syrian dishes.',
            'image_profile'=> Storage::url('image/Ain Hamza Restaurant.jpg'),
            'phone'=> +96311123456,
            'rate' => 4.0
        ]);
        //                                  Lattakia
        //Elite Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 3,
            'name'=> 'Elite Restaurant',
            'address'=>'Latakia, Syria',
            'type'=>'International cuisine',
            'description'=>'Elite Restaurant is a popular restaurant in Latakia that offers a variety of international dishes.',
            'image_profile'=> Storage::url('image/Elite Restaurant.jpg'),
            'phone'=> +96341123456,
            'rate' => 4.3
        ]);
        //Somar Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 3,
            'name'=> 'Somar Restaurant',
            'address'=>'Latakia, Syria',
            'type'=>'Syrian cuisine',
            'description'=>'Somar Restaurant is a popular Syrian restaurant in Latakia that offers a wide range of traditional Syrian dishes.',
            'image_profile'=> Storage::url('image/Somar Restaurant.jpg'),
            'phone'=> +96341654321,
            'rate' => 4.6
        ]);
        //The View Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 3,
            'name'=> 'The View Restaurant',
            'address'=>'Latakia, Syria',
            'type'=>'Mediterranean cuisine',
            'description'=>'The View Restaurant is a popular restaurant in Latakia that offers Mediterranean cuisine with a beautiful sea view.',
            'image_profile'=> Storage::url('image/The View Restaurant.jpg'),
            'phone'=> +96341987654,
            'rate' => 4.8
        ]);
        //Allegro Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 3,
            'name'=> 'Allegro Restaurant',
            'address'=>'Latakia, Syria',
            'type'=>'Italian cuisine',
            'description'=>'Allegro Restaurant is a popular Italian restaurant in Latakia that offers a variety of delicious Italian dishes.',
            'image_profile'=> Storage::url('image/Allegro Restaurant.jpg'),
            'phone'=> +96341321654,
            'rate' => 4.1
        ]);
        //                                  Homs
        //Al Mirage
        DB::table('restaurants')->insert([
            'city_id'=> 4,
            'name'=> 'Al Mirage',
            'address'=>'Homs, Syria',
            'type'=>'Middle Eastern cuisine',
            'description'=>'Al Mirage is a popular restaurant in Homs that offers a variety of Middle Eastern dishes.',
            'image_profile'=> Storage::url('image/Al Mirage.jpg'),
            'phone'=>+96331123456,
            'rate' => 4.3
        ]);
        //Cello
        DB::table('restaurants')->insert([
            'city_id'=> 4,
            'name'=> 'Cello',
            'address'=>'Homs, Syria',
            'type'=>'Italian cuisine',
            'description'=>'Cello is a popular Italian restaurant in Homs that offers a variety of delicious Italian dishes.',
            'image_profile'=> Storage::url('image/Cello.jpg'),
            'phone'=> +96331654321,
            'rate' => 4.6
        ]);
        //Pancake House Traditional Palmyra
        DB::table('restaurants')->insert([
            'city_id'=> 4,
            'name'=> 'Pancake House Traditional Palmyra Restaurant',
            'address'=>'Homs, Syria',
            'type'=>'Syrian cuisine',
            'description'=>'Pancake House Traditional Palmyra Restaurant is a popular Syrian restaurant in Homs that offers a wide range of traditional Syrian dishes.',
            'image_profile'=> Storage::url('image/Pancake House Traditional Palmyra.jpg'),
            'phone'=> +96331987654,
            'rate' => 4.8
        ]);
        //Bagdad Cafe 66
        DB::table('restaurants')->insert([
            'city_id'=> 4,
            'name'=> 'Bagdad Cafe 66',
            'address'=>'Homs, Syria',
            'type'=>'International cuisine',
            'description'=>'Bagdad Cafe 66 is a popular restaurant in Homs that offers a variety of international dishes.',
            'image_profile'=> Storage::url('image/Baghdad Cafe 66.jpg'),
            'phone'=> +96331321654,
            'rate' => 4.1
        ]);
          //                                  Aleppo
        //Smile Cafe and Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 5,
            'name'=> 'Smile Cafe and Restaurant - Aleppo',
            'address'=>'Aleppo, Syria',
            'type'=>'International cuisine',
            'description'=>'Smile Cafe and Restaurant is a popular restaurant in Aleppo that offers a variety of international dishes.',
            'image_profile'=> Storage::url('image/Smile Cafe and Restaurant.jpg'),
            'phone'=> +96321123456,
            'rate' => 4.5
        ]);
        //Grand Station
        DB::table('restaurants')->insert([
            'city_id'=> 5,
            'name'=> 'Grand Station',
            'address'=>'Aleppo, Syria',
            'type'=>'Mediterranean cuisine',
            'description'=>'Grand Station is a popular restaurant in Aleppo that offers Mediterranean cuisine in a lively atmosphere.',
            'image_profile'=> Storage::url('image/Grand station.jpg'),
            'phone'=> +96321654321,
            'rate' => 4.2
        ]);
        //Ikebana -A taste of Asia
        DB::table('restaurants')->insert([
            'city_id'=> 5,
            'name'=> 'Ikebana -A taste of Asia',
            'address'=>'Aleppo, Syria',
            'type'=>'Asian cuisine',
            'description'=>'Ikebana -A taste of Asia is a popular restaurant in Aleppo that offers a wide range of delicious Asian dishes.',
            'image_profile'=> Storage::url('image/Ikebana -A taste of Asia.jpg'),
            'phone'=> +96321987654,
            'rate' => 4.7
        ]);
        //Beroea Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 5,
            'name'=> 'Beroea Restaurant',
            'address'=>'Aleppo, Syria',
            'type'=>'Syrian cuisine',
            'description'=>'Beroea Restaurant is a popular Syrian restaurant in Aleppo that offers a wide range of traditional Syrian dishes.',
            'image_profile'=> Storage::url('image/Beroea Restaurant.jpg'),
            'phone'=> +96321321654,
            'rate' => 4.0
        ]);
        //                                 Emirate of Abu Dhabi
        //Hakkasan Abu Dhabi
        DB::table('restaurants')->insert([
            'city_id'=> 6,
            'name'=> 'Hakkasan Abu Dhabi',
            'address'=>'Abu Dhabi, UAE',
            'type'=>'Chinese cuisine',
            'description'=>'Hakkasan Abu Dhabi is a popular Chinese restaurant in Abu Dhabi that offers a variety of delicious Chinese dishes in an elegant atmosphere.',
            'image_profile'=> Storage::url('image/Haskkan Abu Dhabi.jpg'),
            'phone'=> +971287654321,
            'rate' => 4.3
        ]);
        //Catch at St. Regis
        DB::table('restaurants')->insert([
            'city_id'=> 6,
            'name'=> 'Catch at St. Regis',
            'address'=>'Abu Dhabi, UAE',
            'type'=>'Seafood cuisine',
            'description'=>'Catch at St. Regis is a popular seafood restaurant in Abu Dhabi that offers a variety of fresh seafood dishes with a stunning view of the city.',
            'image_profile'=> Storage::url('image/Catch at St. Regis.jpg'),
            'phone'=> +971234567890,
            'rate' => 4.6
        ]);
        //Celebrity
        DB::table('restaurants')->insert([
            'city_id'=> 6,
            'name'=> 'Celebrity',
            'address'=>'Emirate of Abu Dhabi, UAE',
            'type'=>'International cuisine',
            'description'=>'Celebrity is a popular restaurant in Emirate of Abu Dhabi that offers a variety of international dishes with a stunning view of the city.',
            'image_profile'=> Storage::url('image/Celebrity.jpg'),
            'phone'=> +971212345678,
            'rate' => 4.1
        ]);
        //                                      Emirate of Dubai
        //Talea by Antonio Guida
        DB::table('restaurants')->insert([
            'city_id'=> 7,
            'name'=> 'Talea by Antonio Guida',
            'address'=>'Dubai, UAE',
            'type'=>'Italian cuisine',
            'description'=>'Talea by Antonio Guida is a popular Italian restaurant in Dubai that offers a variety of Italian dishes with a modern twist.',
            'image_profile'=> Storage::url('image/Talea by Antonio Guida.jpg'),
            'phone'=> +97141234567,
            'rate' => 4.5
        ]);
        //Martabaan by Hemant Oberoi
        DB::table('restaurants')->insert([
            'city_id'=> 7,
            'name'=> 'Martabaan by Hemant Oberoi',
            'address'=>'Dubai, UAE',
            'type'=>'Indian cuisine',
            'description'=>'Martabaan by Hemant Oberoi is a popular Indian restaurant in Dubai that offers a variety of traditional and contemporary Indian dishes.',
            'image_profile'=> Storage::url('image/Martabaan by Hemant Oberoi.jpg'),
            'phone'=> +97149876543,
            'rate' => 4.8
        ]);
        //                                      Emirate of Sharjah
        //Spice Grill Seafood Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 8,
            'name'=> 'Spice Grill Seafood Restaurant',
            'address'=>'Sharjah, UAE',
            'type'=>'Seafood cuisine',
            'description'=>'Spice Grill Seafood Restaurant is a popular seafood restaurant in Sharjah that offers a wide range of fresh seafood dishes.',
            'image_profile'=> Storage::url('image/Spice Grill Seafood Restaurant.jpg'),
            'phone'=> +97161234567,
            'rate' => 4.3
        ]);
        //Grub Shack Express
        DB::table('restaurants')->insert([
            'city_id'=> 8,
            'name'=> 'Grub Shack Express',
            'address'=>'Sharjah, UAE',
            'type'=>'Fast food',
            'description'=>'Grub Shack Express is a popular fast food restaurant in Sharjah that offers a variety of delicious burgers, sandwiches, and wraps.',
            'image_profile'=> Storage::url('image/Grub Shack Express.jpg'),
            'phone'=> +971687654321,
            'rate' => 4.6
        ]);
        //Katis Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 8,
            'name'=> 'Katis Restaurant',
            'address'=>'Sharjah, UAE',
            'type'=>'Filipino cuisine',
            'description'=>'Katis Restaurant is a popular Filipino restaurant in Sharjah that offers a variety of traditional Filipino dishes.',
            'image_profile'=> Storage::url('image/Katis Restaurant.jpg'),
            'phone'=> +971634567890,
            'rate' => 4.8
        ]);
        //Shakespeare and Co
        DB::table('restaurants')->insert([
            'city_id'=> 8,
            'name'=> 'Shakespeare and Co',
            'address'=>'Sharjah, UAE',
            'type'=>'Café and restaurant',
            'description'=>'Shakespeare and Co is a popular café and restaurant in Sharjah that offers a variety of delicious dishes in a cozy atmosphere.',
            'image_profile'=> Storage::url('image/Shakespeare and Co.jpg'),
            'phone'=> +97169876543,
            'rate' => 4.1
        ]);
        //Five Star Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 8,
            'name'=> 'Five Star Restaurant',
            'address'=>'Sharjah, UAE',
            'type'=>'Arabic cuisine',
            'description'=>'Five Star Restaurant is a popular Arabic restaurant in Sharjah that offers a variety of delicious Arabic dishes.',
            'image_profile'=> Storage::url('image/Five Star Restaurant.jpg'),
            'phone'=> +971612345678,
            'rate' => 4.5
        ]);
        //                                      Emirate of Ajman
        //Seascape Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 9,
            'name'=> 'Seascape Restaurant',
            'address'=>'Ajman, UAE',
            'type'=>'Seafood cuisine',
            'description'=>'Seascape Restaurant is a popular seafood restaurant in Ajman that offers a variety of fresh seafood dishes with a stunning view of the sea.',
            'image_profile'=> Storage::url('image/Seascape Restaurant.jpg'),
            'phone'=> +97161234567,
            'rate' => 4.3
        ]);
        //Grub Gioia - Italian Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 9,
            'name'=> 'Grub Gioia - Italian Restaurant',
            'address'=>'Ajman, UAE',
            'type'=>'Italian cuisine',
            'description'=>'Grub Gioia - Italian Restaurant is a popular Italian restaurant in Ajman that offers a variety of delicious Italian dishes.',
            'image_profile'=> Storage::url('image/Grub Gioia - Italian Restaurant.jpg'),
            'phone'=> +971687654321,
            'rate' => 4.6
        ]);
        //Bukhara - Northern Indian Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 9,
            'name'=> 'Bukhara - Northern Indian Restaurant',
            'address'=>'Ajman, UAE',
            'type'=>'Indian cuisine',
            'description'=>'Bukhara - Northern Indian Restaurant is a popular Indian restaurant in Ajman that offers a variety of delicious North Indian dishes.',
            'image_profile'=> Storage::url('image/Bukhara - Northern Indian Restaurant.jpg'),
            'phone'=> +971634567890,
            'rate' => 4.8
        ]);
        //Dragon's Place
        DB::table('restaurants')->insert([
            'city_id'=> 9,
            'name'=> "Dragon's Place",
            'address'=>'Ajman, UAE',
            'type'=>'Chinese cuisine',
            'description'=>"Dragon's Place is a popular Chinese restaurant in Ajman that offers a variety of delicious Chinese dishes.",
            'image_profile'=> Storage::url("image/Dragon's Place.jpg"),
            'phone'=> +97169876543,
            'rate' => 4.1
        ]);
        //Kiyi Restaurant
        DB::table('restaurants')->insert([
            'city_id'=> 9,
            'name'=> 'Kiyi Restaurant',
            'address'=>'Ajman, UAE',
            'type'=>'Turkish cuisine',
            'description'=>'Kiyi Restaurant is a popular Turkish restaurant in Ajman that offers a variety of delicious Turkish dishes.',
            'image_profile'=> Storage::url('image/Kiyi Restaurant.jpg'),
            'phone'=> +971612345678,
            'rate' => 4.5
        ]);
        //                                      London
        //Min Jiang
        DB::table('restaurants')->insert([
            'city_id'=> 10,
            'name'=> 'Min Jiang',
            'address'=>'London, UK',
            'type'=>'Chinese cuisine',
            'description'=>'Min Jiang is a popular Chinese restaurant in London that offers a variety of Chinese dishes with a stunning view of the city.',
            'image_profile'=> Storage::url('image/Min Jiang.jpg'),
            'phone'=> +442012345678,
            'rate' => 4.3
        ]);
        //Hutong
        DB::table('restaurants')->insert([
            'city_id'=> 10,
            'name'=> 'Hutong',
            'address'=>'London, UK',
            'type'=>'Chinese cuisine',
            'description'=>'Hutong is a popular Chinese restaurant in London that offers a variety of Sichuan dishes with a beautiful view of the city.',
            'image_profile'=> Storage::url('image/Hutong.jpg'),
            'phone'=> +442087654321,
            'rate' => 4.6
        ]);
        //Galvin at Windows
        DB::table('restaurants')->insert([
            'city_id'=> 10,
            'name'=> 'Galvin at Windows',
            'address'=>'London, UK',
            'type'=>'French cuisine',
            'description'=>'Galvin at Windows is a popular French restaurant in London that offers a variety of delicious French dishes with a stunning view of the city.',
            'image_profile'=> Storage::url('image/Galvin at Window.jpg'),
            'phone'=> +442056781234,
            'rate' => 4.8
        ]);
        //Dinner by Heston Blumenthal
        DB::table('restaurants')->insert([
            'city_id'=> 10,
            'name'=> 'Dinner by Heston Blumenthal',
            'address'=>'London, UK',
            'type'=>'Modern British cuisine',
            'description'=>'Dinner by Heston Blumenthal is a popular restaurant in London that offers a modern take on traditional British dishes.',
            'image_profile'=> Storage::url('image/Dinner by Heston Blumenthal.jpg'),
            'phone'=> +442043218765,
            'rate' => 4.1
        ]);
        //8 at The Londoner
        DB::table('restaurants')->insert([
            'city_id'=> 10,
            'name'=> '8 at The Londoner',
            'address'=>'London, UK',
            'type'=>'Asian cuisine',
            'description'=>'8 at The Londoner is a popular Asian restaurant in London that offers a wide range of delicious Asian dishes.',
            'image_profile'=> Storage::url('image/8 at The Londoner.jpg'),
            'phone'=> +442012345678,
            'rate' => 4.5
        ]);
        //                                        Paris
        //La Table du Huit
        DB::table('restaurants')->insert([
            'city_id'=> 11,
            'name'=> 'La Table du Huit',
            'address'=>'Paris, France',
            'type'=>'French cuisine',
            'description'=>'La Table du Huit is a popular French restaurant in Paris that offers a variety of French dishes.',
            'image_profile'=> Storage::url('image/La Table du Huit.jpg'),
            'phone'=> +33188223344,
            'rate' => 4.3
        ]);
        //Sphère
        DB::table('restaurants')->insert([
            'city_id'=> 11,
            'name'=> 'Sphère',
            'address'=>'Paris, France',
            'type'=>'International cuisine',
            'description'=>'Sphère is a popular restaurant in Paris that offers a variety of international dishes in an elegant atmosphere.',
            'image_profile'=> Storage::url('image/Sphère.jpg'),
            'phone'=> +33188223355,
            'rate' => 4.6
        ]);
        //Fenouil Paris 8
        DB::table('restaurants')->insert([
            'city_id'=> 11,
            'name'=> 'Fenouil Paris 8',
            'address'=>'Paris, France',
            'type'=>'Vegetarian cuisine',
            'description'=>'Fenouil Paris 8 is a popular vegetarian restaurant in Paris that offers a variety of delicious vegetarian dishes.',
            'image_profile'=> Storage::url('image/Fenouil Paris 8.jpg'),
            'phone'=> +33188223366,
            'rate' => 4.8
        ]);
        //Mandoobar
        DB::table('restaurants')->insert([
            'city_id'=>11,
            'name'=> 'Mandoobar',
            'address'=>'Paris, France',
            'type'=>'Middle Eastern cuisine',
            'description'=>'Mandoobar is a popular Middle Eastern restaurant in Paris that offers a wide range of traditional dishes.',
            'image_profile'=> Storage::url('image/Mandoobar.jpg'),
            'phone'=> +33188223377,
            'rate' => 4.1
        ]);
        //Nirvana Inde
        DB::table('restaurants')->insert([
            'city_id'=>11,
            'name'=> 'Nirvana Inde',
            'address'=>'Paris, France',
            'type'=>'Indian cuisine',
            'description'=>'Nirvana Inde is a popular Indian restaurant in Paris that offers a variety of delicious Indian dishes.',
            'image_profile'=> Storage::url('image/Nirvana Inde.jpg'),
            'phone'=> +33188223388,
            'rate' => 4.5
        ]);

    }
}
