<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { //damascus
        DB::table('places')->insert([
            'city_id'=>1,

        'name' => 'Azem Palace',
        'description' => 'Azem Palace is a historic palace located in the Old City of Damascus. It was built during the 18th century by the Ottoman governor of Damascus and is considered one of the finest examples of traditional Damascene architecture. Today, it serves as a museum and features exhibits on the history and culture of Damascus.',
        'rate' => 4.6,
        'image_profile' => Storage::url('image/al azem palace.PNG'),
        'address' => 'Old City - Damascus - Syria',
        'price'=>5000
    ]);
    DB::table('places')->insert([
        'city_id'=>1,

        'name' => 'National Museum of Damascus',
        'description' => 'National Museum of Damascus is a museum located in the heart of Damascus. It features a wide range of exhibits on the history and culture of Syria, including artifacts from the Neolithic period to the present day. The museum is considered one of the most important and comprehensive museums in the Middle East.',
        'rate' => 4.5,
        'image_profile' => Storage::url('image/national museum1.PNG'),
        'address' => 'Damascus - Syria',
        'price'=>5000
    ]);
    DB::table('places')->insert([
        'city_id'=>1,

        'name' => 'The Straight Street',
        'description' => 'The Straight Street is a historic street located in the Old City of Damascus. It dates back to the Roman period and is considered one of the oldest and most important streets in the world. The street features a wide range of shops, cafes, and restaurants, as well as stunning architecture and historic landmarks.',
        'rate' => 4.3,
        'image_profile' => Storage::url('image/the straight street.PNG'),
        'address' => 'Old City - Damascus - Syria'
    ]);

        DB::table('places')->insert([
            'city_id'=>1,
            'name' => 'Umayyad Mosque',
            'description' => 'Umayyad Mosque is a historic mosque located in the Old City of Damascus. It was built during the Umayyad period and is considered one of the most important and oldest mosques in the world. The mosque features stunning architecture, including a large courtyard, a dome, and a minaret.',
            'rate' => 4.7,
            'image_profile' => Storage::url('image/the umayyad mosque1.PNG'),
            'address' => 'Old City - Damascus - Syria'
        ]);
        DB::table('places')->insert([
            'city_id'=>1,

            'name' => 'Damascus Citadel',
                'description' => 'Damascus Citadel is a historic fortress located in the center of Damascus. It was built during the 13th century and has been occupied by numerous civilizations throughout history, including the Romans, the Byzantines, and the Ottomans. Today, it is a popular destination for tourists and offers stunning views of the city.',
                'rate' => 4.5,
                'image_profile' =>Storage::url('image/citadel of damascus.PNG'),
                'address' => 'Old City - Damascus - Syria'
            ]);
        DB::table('places')->insert([
            'city_id'=>1,

            'name' => 'Souq Al-Hamidiyah',
                'description' => 'Souq Al-Hamidiyah is a historic and bustling marketplace located in the Old City of Damascus. It features a wide range of stalls selling traditional crafts, clothing, and food, as well as cafes and restaurants. The market dates back to the Ottoman period and is a popular destination for locals and tourists alike.',
                'rate' => 4.3,
                'image_profile' => Storage::url('image/Souq Al-Hamidiyah1.PNG'),
                'address' => 'Old City - Damascus - Syria'

     ]);
            //tartous
        DB::table('places')->insert([
            'city_id'=>2,

            'name' => 'Tartous National Museum',
        'description' => 'Tartous National Museum is a museum located in the city of Tartous. It features a wide range of exhibits on the history and culture of Syria, including artifacts from the Bronze Age, the Roman period, and the Islamic era.',
        'rate' => 4.5,
        'image_profile' =>  Storage::url('image/tartous national museum.PNG'),
        'address' => 'Tartous - Syria',
            'price'=>4000
    ]);

        DB::table('places')->insert([
            'city_id'=>2,
        'name' => 'Arwad Island',
        'description' => 'Arwad Island is a small island located near Tartous. It is considered one of the oldest continuously inhabited places in the world, with evidence of human settlement dating back to the 3rd millennium BCE. Today, it is a popular destination for tourists and offers stunning views of the Mediterranean Sea.',
        'rate' => 4.6,
        'image_profile' => Storage::url('image/arwad island.PNG'),
        'address' => 'Arwad Island - Tartous - Syria',
        'price'=>10000
    ]);

        DB::table('places')->insert([
            'city_id'=>2,
        'name' => 'Tartous Citadel',
        'description' => 'Tartous Citadel is a historic fortress located at the center of Tartous. It was built during the Crusader period and has been occupied by numerous civilizations throughout history, including the Ottomans and the French. Today, it is a popular destination for tourists and offers stunning views of the city and the Mediterranean Sea.',
        'rate' => 4.4,
        'image_profile' =>  Storage::url('image/tartous citadel.PNG'),
        'address' => 'Tartous - Syria'
    ]);

        DB::table('places')->insert([
            'city_id'=>2,
        'name' => 'Al-Omari Mosque',
        'description' => 'Al-Omari Mosque is a historic mosque located in the city of Tartous. It was built in the 13th century and is one of the oldest and most important mosques in Syria, featuring a distinctive black-and-white striped minaret.',
        'rate' => 4.3,
        'image_profile' =>  Storage::url('image/Al-Omari Mosque.PNG'),
        'address' => 'Tartous - Syria'
        ]);
        //latakia
        DB::table('places')->insert([
        'city_id'=>3,
        'name' => 'Latakia Citadel',
        'description' => 'Latakia Citadel is a historic fortress located at the center of Latakia. It was built during the Byzantine era and has been occupied by numerous civilizations throughout history, including the Crusaders and the Ottomans. Today, it is a popular destination for tourists and offers stunning views of the city and the Mediterranean Sea.',
        'rate' => 4.5,
        'image_profile' => Storage::url('image/latakia citadel.PNG'),
        'address' => 'Latakia - Syria'
    ]);

        DB::table('places')->insert([
            'city_id'=>3,
        'name' => 'Al-Mina Archaeological Site',
        'description' => 'Al-Mina Archaeological Site is an ancient city located near the modern-day city of Latakia. It was an important center of trade during the ancient times and is known for its well-preserved ruins, including a harbor, a temple, and a marketplace.',
        'rate' => 4.4,
        'image_profile' =>  Storage::url('image/Al-Mina Archaeological Site.PNG'),
        'address' => 'Latakia Governorate - Syria'
    ]);

        DB::table('places')->insert([
            'city_id'=>3,
        'name' => 'Latakia Corniche',
        'description' => 'Latakia Corniche is a scenic waterfront promenade located along the Mediterranean Sea. It is a popular spot for locals and tourists alike, offering stunning views of the sea and the city. It features numerous cafes, restaurants, and shops, as well as a large park.',
        'rate' => 4.3,
        'image_profile' =>  Storage::url('image/latakia corniche.PNG'),
        'address' => 'Latakia - Syria'
        ]);
        DB::table('places')->insert([
            'city_id'=>3,
            'name' => 'Ugarit',
            'description' => 'Ugarit is an ancient city located near the modern-day city of Latakia. It was an important center of trade and culture during the Bronze Age and is known for its well-preserved ruins, including a royal palace, temples, and a library with clay tablets containing the oldest known alphabet.',
            'rate' => 4.6,
            'image_profile' =>  Storage::url('image/ugarit.PNG'),
            'address' => 'Ugarit - Latakia Governorate - Syria'
        ]);

        //Homs

       DB::table('places')->insert([
           'city_id'=>4,
           'name' => 'Crac des Oliviers',
        'description' => 'Crac des Oliviers is a historic castle located near Homs. It was built during the 12th century and has been occupied by numerous civilizations throughout history, including the Crusaders and the Mamluks.',
        'rate' => 4.4,
        'image_profile' => Storage::url('image/crac des oliviers.PNG'),
        'address' => 'Homs - Syria'
    ]);
       DB::table('places')->insert([
           'city_id'=>4,
           'name' => 'Khaled ibn Al-Walid Mosque',
        'description' => 'Khaled ibn Al-Walid Mosque is a historic mosque located in the city of Homs. It was built in the 13th century and is named after the Muslim general Khaled ibn Al-Walid.',
        'rate' => 4.3,
        'image_profile' => Storage::url('image/Khaled ibn Al-Walid Mosque.PNG'),
        'address' => 'Al-Makhram - Homs - Syria'
    ]);

        DB::table('places')->insert([
            'city_id'=>4,
            'name' => 'Qattina Lake',
                'description' => 'Qattina Lake is a lake located in the southwest of the Syrian city of Homs. Its length is 30 km, its width is 16 km, and its area is 61 km². It is known for its fish wealth. The lake originated from the gathering of the waters of the Orontes River behind a basaltic tongue extending from the Homs valley',
                'rate' => 4.3,
                'image_profile' => Storage::url('image/Qattina Lake4.PNG'),
                'address' => 'Homs - Syria'

        ]);
        DB::table('places')->insert([
            'city_id'=>4,
            'name' => 'homs new clock tower ',
            'description' => 'It is a tower building carrying a large mechanical clock at its top, distributed over four hours overlooking the various sides. It is one of the famous landmarks of Homs and a symbol of the city as well. Its construction dates back to the sixties of the twentieth century.',
            'rate' => 4.7,
            'image_profile' => Storage::url('image/homs new clock tower.PNG'),
            'address' => 'Shukri al-Quwatli, Homs, Syria'

        ]);
        DB::table('places')->insert([
            'city_id'=>4,
            'name' => 'palmyra city',
            'description' => 'Palmyra is a Syrian city in the center of the country, administratively belonging to the Homs Governorate. It is located in the central oasis of the Levant, 215 km northeast of Damascus and 180 km southwest of the Euphrates River. The ruins of the ancient city of Palmyra, which is among the UNESCO World Heritage Sites, are located southwest of the modern city center, about 500 meters away.',
            'rate' => 4.7,
            'image_profile' => Storage::url('image/palmyra city.PNG'),
            'address' => 'Shukri al-Quwatli, Homs, Syria',
            'price'=>20000
        ]);
        //aleppo
        DB::table('places')->insert([
            'city_id'=>5,

            'name' => 'National Museum of Aleppo',
            'description' => 'The National Museum of Aleppo is a museum located in the central district of Aleppo. It features exhibits on the history and culture of Syria, including artifacts from the Roman, Byzantine, and Islamic periods.',
            'rate' => 4.4,
            'image_profile' => Storage::url('image/National Museum of Aleppo.PNG'),
            'address' => 'Suleimania - Aleppo - Syria',
            'price'=>6000
        ]);
        DB::table('places')->insert([
            'city_id'=>5,

            'name' => 'Saint Simeons Basilica',
        'description' => 'Saint Simeon\'s Basilica is a ruined church located on a hill outside Aleppo. It was built in the 5th century and was one of the largest churches in the world at the time. Today, it is a popular destination for tourists and pilgrims.',
        'rate' => 4.6,
        'image_profile' => Storage::url('image/Saint Simeons Basilica.PNG'),
        'address' => 'Saint Simeon - Aleppo - Syria'
    ]);
            DB::table('places')->insert([
                'city_id'=>5,
                'name' => 'Bab al-Faraj clock',
        'description' => 'The tower consists of four facades, like the old minarets, but it differs from them because its base is wide, and if we carefully look at the body of this building, we find that it is composed of four facades, its walls rise in an inclined manner, so that the first girdle appears protruding from the body of the building.',
        'rate' => 4.8,
        'image_profile' =>  Storage::url('image/Bab al-Faraj clock.PNG'),
        'address' => ' Aleppo - Syria'

]);
            DB::table('places')->insert([
            'city_id'=>5,
            'name' => 'Citadel of Aleppo',
            'description' => 'The Citadel of Aleppo is a medieval fortified palace located in the center of Aleppo. It is one of the oldest and largest castles in the world, and has been occupied by numerous civilizations throughout history, including the Greeks, Romans, Byzantines, and Ottomans.',
            'rate' => 4.7,
            'image_profile' => Storage::url('image/Citadel of Aleppo.PNG'),
            'address' => 'Al Madina Souq - Aleppo - Syria'
        ]);

        DB::table('places')->insert([
            'city_id'=>5,
            'name' => 'Great Mosque of Aleppo',
                'description' => 'The Great Mosque of Aleppo is a medieval mosque located in the center of Aleppo. It is one of the oldest and most important mosques in the world, and has been rebuilt and restored numerous times throughout history.',
                'rate' => 4.6,
                'image_profile' => Storage::url('image/Great Mosque of Aleppo.PNG'),
                'address' => 'Al Jalloum - Aleppo - Syria'
            ]);
        DB::table('places')->insert([
            'city_id'=>5,
            'name' => 'Al-Madina Souq',
                'description' => 'Al-Madina Souq is a historic covered market located in the center of Aleppo. It features numerous shops and stalls selling a variety of goods, including clothing, jewelry, spices, and souvenirs, and is a popular destination for tourists and locals alike.',
                'rate' => 4.5,
                'image_profile' => Storage::url('image/Al-Madina Souq in aleppo.PNG'),
                'address' => 'Al Madina Souq - Aleppo - Syria'

            ]);

            //Emirate of Abu Dhabi
        DB::table('places')->insert([
            'city_id'=>6,
        'name' => 'Emirates Palace',
        'description' => 'The Emirates Palace is a luxury hotel located in Abu Dhabi. It features 394 rooms and suites, 40 meeting and conference rooms, a spa, and numerous restaurants and bars, and is a popular destination for luxury travelers.',
        'rate' => 4.8,
        'image_profile' => Storage::url('image/Emirates Palace.PNG'),
        'address' => 'West Corniche Road - Abu Dhabi - United Arab Emirates'
        ]);

        DB::table('places')->insert([
            'city_id'=>6,
        'name' => 'Qasr Al Watan',
        'description' => 'Qasr Al Watan is a palace and cultural destination located in Abu Dhabi. It offers visitors a glimpse into the history and culture of the United Arab Emirates, with exhibits on Islamic art, culture, and heritage.',
        'rate' => 4.7,
        'image_profile' => Storage::url('image/Qasr Al Watan.PNG'),
        'address' => 'Al Ras Al Akhdar - Abu Dhabi - United Arab Emirates']);

        DB::table('places')->insert([
            'city_id'=>6,
        'name' => 'Yas Marina Circuit',
        'description' => 'The Yas Marina Circuit is a motorsport race track located on Yas Island in Abu Dhabi. It is home to the Abu Dhabi Grand Prix and numerous other motorsport events, and is a popular destination for motorsports fans.',
        'rate' => 4.6,
        'image_profile' => Storage::url('image/Yas Marina Circuit.PNG'),
        'address' => 'Yas Island - Abu Dhabi - United Arab Emirates',
            'price'=>500
            ]);

        DB::table('places')->insert([
            'city_id'=>6,
            'name' => 'Sheikh Zayed Grand Mosque',
        'description' => 'The Sheikh Zayed Grand Mosque is a mosque located in Abu Dhabi. It is the largest mosque in the United Arab Emirates and is a symbol of the country\'s Islamic heritage and architecture.',
        'rate' => 4.9,
        'image_profile' => Storage::url('image/Sheikh Zayed Grand Mosque.PNG'),
        'address' => 'Sheikh Rashid Bin Saeed St - Abu Dhabi - United Arab Emirates'
    ]);
        DB::table('places')->insert([
            'city_id'=>6,
            'name' => 'Louvre Abu Dhabi',
        'description' => 'The Louvre Abu Dhabi is a museum located on Saadiyat Island in Abu Dhabi. It is the largest art museum in the Arabian Peninsula and is home to a vast collection of art and artifacts from around the world.',
        'rate' => 4.7,
        'image_profile' =>  Storage::url('image/Louvre Abu Dhabi.PNG'),
        'address' => 'Saadiyat Island - Abu Dhabi - United Arab Emirates',
         'price'=>200
    ]);
        DB::table('places')->insert([
            'city_id'=>6,
            'name' => 'Ferrari World Abu Dhabi',
        'description' => 'Ferrari World Abu Dhabi is an amusement park located on Yas Island in Abu Dhabi. It is the first Ferrari-branded theme park and is home to numerous rides and attractions, including the world\'s fastest roller coaster.',
        'rate' => 4.5,
        'image_profile' =>  Storage::url('image/Ferrari World Abu Dhabi.PNG'),
        'address' => 'Yas Island - Abu Dhabi - United Arab Emirates',
        'price'=>700
    ]);


        //emirate of dubai
        DB::table('places')->insert([
        'city_id'=>7,

                'name' => 'Burj Khalifa',
            'description' => 'The Burj Khalifa is a skyscraper located in the heart of Dubai. It is the tallest building in the world, standing at a height of 828 meters, and is a symbol of modern engineering and design.',
            'rate' => 4.9,
            'image_profile' => Storage::url('image/Burj Khalifa.PNG'),
            'address' => '1 Sheikh Mohammed bin Rashid Blvd, Dubai, United Arab Emirates',
            'price'=>500
            ]);
       DB::table('places')->insert([
           'city_id'=>7,
           'name' => 'The Dubai Mall',
                'description' => 'The Dubai Mall is one of the largest shopping centers in the world, located in the heart of Dubai. It is home to over 1,200 stores, as well as numerous restaurants, cinemas, and other attractions.',
                'rate' => 4.7,
                'image_profile' => Storage::url('image/The Dubai Mall5.PNG'),
                'address' => 'Financial Center Rd, Along Sheikh Zayed Road, Next to Burj Khalifa - Dubai - United Arab Emirates'
       ]);
       DB::table('places')->insert([
              'city_id'=>7,

              'name' => 'The Dubai Fountain',
                'description' => 'The Dubai Fountain is a choreographed fountain system located on the man-made Burj Khalifa Lake in Dubai. It features water jets that shoot up to 500 feet in the air, accompanied by music and lights.',
                'rate' => 4.8,
                'image_profile' => Storage::url('image/The Dubai Fountain.PNG'),
                'address' => 'Dubai Mall, Financial Center Rd, Dubai, United Arab Emirates'
       ]);
          DB::table('places')->insert([
              'city_id'=>7,
        'name' => 'Palm Jumeirah',
        'description' => 'Palm Jumeirah is an artificial archipelago located off the coast of Dubai. It is shaped like a palm tree and is home to some of the most luxurious hotels, resorts, and residences in the world.',
        'rate' => 4.6,
        'image_profile' => Storage::url('image/Palm Jumeirah.PNG'),
        'address' => 'Palm Jumeirah - Dubai - United Arab Emirates',
        'price'=>200
          ]);
    DB::table('places')->insert([
        'city_id'=>7,
        'name' => 'Dubai Miracle Garden',
        'description' => 'Dubai Miracle Garden is a botanical garden located in Dubailand, Dubai. It is home to over 45 million flowers and is the largest flower garden in the world.',
        'rate' => 4.7,
        'image_profile' => Storage::url('image/Dubai Miracle Garden.PNG'),
        'address' => 'Al Barsha South 3, Barsha, Dubailand Area - Dubai - United Arab Emirates']);
    DB::table('places')->insert([
        'city_id'=>7,
        'name' => 'Dubai Museum',
        'description' => 'Dubai Museum is the oldest existing building in Dubai and is located in the Al Fahidi Fort, which was built in 1787. It offers a glimpse into the history and culture of Dubai, with exhibits on traditional life and customs.',
        'rate' => 4.5,
        'image_profile' => Storage::url('image/Dubai Museum.PNG'),
        'address' => 'Al Fahidi St - Dubai - United Arab Emirates',
        'price'=>300

          ]);
    //Emirate of Sharjah
        DB::table('places')->insert([
            'city_id'=>8,

            'name' => 'Al Qasba',
            'description' => 'Al Qasba is a waterfront destination located in the heart of Sharjah. It features a canal, a Ferris wheel, a theater, and numerous cafes and restaurants, and is a popular destination for families and tourists.',
            'rate' => 4.6,
            'image_profile' => Storage::url('image/Al Qasba.PNG'),
            'address' => 'Al Qasba - Sharjah - United Arab Emirates',
            'price'=>200
        ]);

        DB::table('places')->insert([
            'city_id'=>8,

            'name' => 'Sharjah Heritage Area',
            'description' => 'The Sharjah Heritage Area is a historic district located in the heart of Sharjah. It features traditional Emirati architecture, museums, and cultural centers, and offers a glimpse into the history and culture of Sharjah.',
            'rate' => 4.7,
            'image_profile' => Storage::url('image/Sharjah Heritage Area.PNG'),
            'address' => 'Al Mareija St - Sharjah - United Arab Emirates',
        'price'=>500
        ]);
        DB::table('places')->insert([
            'city_id'=>8,

            'name' => 'Sharjah Science Museum',
            'description' => 'The Sharjah Science Museum is a science museum located in the Al Khan area of Sharjah. It features interactive exhibits and hands-on activities, and is a popular destination for families and school groups.',
            'rate' => 4.5,
            'image_profile' => Storage::url('image/Sharjah Science Museum.PNG'),
            'address' => 'Al Dhaid Rd - Sharjah - United Arab Emirates',
            'price'=>200
        ]);
        DB::table('places')->insert([
            'city_id'=>8,

            'name' => 'Al Noor Island',
            'description' => 'Al Noor Island is a man-made island located in Khalid Lagoon in Sharjah. It is home to a butterfly house, an art park, and a literature pavilion, and is a popular destination for tourists and locals alike.',
            'rate' => 4.6,
            'image_profile' => Storage::url('image/Al Noor Island.PNG'),
            'address' => 'Al Noor Island - Sharjah - United Arab Emirates',
        'price'=>400
        ]);
        DB::table('places')->insert([
            'city_id'=>8,
            'name' => 'Sharjah Art Museum',
            'description' => 'The Sharjah Art Museum is an art museum located in the Arts Area of Sharjah. It is the largest art museum in the United Arab Emirates and is home to a vast collection of modern and contemporary art.',
            'rate' => 4.7,
            'image_profile' => Storage::url('image/Sharjah Art Museum.PNG'),
            'address' => 'Arts Area, Al Shuwaihean - Sharjah - United Arab Emirates',
        'price'=>500
        ]);
        DB::table('places')->insert([
            'city_id'=>8,
            'name' => 'Sharjah Aquarium',
            'description' => 'The Sharjah Aquarium is a public aquarium located in Al Khan, Sharjah. It is home to over 150 species of marine life and is a popular attraction for families and tourists.',
            'rate' => 4.5,
            'image_profile' => Storage::url('image/Sharjah Aquarium.PNG'),
            'address' => 'Al Meena St - Sharjah - United Arab Emirates',
            'price'=>700
        ]);
        //Emirate of Ajman
        DB::table('places')->insert([
            'city_id'=>9,
        'name' => 'Sheikh Zayed Mosque Ajman',
        'description' => 'The Sheikh Zayed Mosque Ajman is a mosque located in Ajman. It is named after the late Sheikh Zayed bin Sultan Al Nahyan, the founder and first President of the United Arab Emirates, and is a popular destination for visitors and worshippers alike.',
        'rate' => 4.7,
        'image_profile' => Storage::url('image/Sheikh Zayed Mosque Ajman.PNG'),
        'address' => 'Al Rashidiya 1 - Ajman - United Arab Emirates'
    ]);
       DB::table('places')->insert([
           'city_id'=>9,

           'name' => 'Al Zorah Nature Reserve',
        'description' => 'The Al Zorah Nature Reserve is a protected area located in Ajman. It features mangroves, lagoons, and a variety of wildlife, including flamingos, herons, and crabs, and is a popular destination for nature lovers and bird watchers.',
        'rate' => 4.8,
        'image_profile' => Storage::url('image/Al Zorah Nature Reserve.PNG'),
        'address' => 'Al Ittihad Rd - Ajman - United Arab Emirates',
           'price'=>200
    ]);
       DB::table('places')->insert([
           'city_id'=>9,

           'name' => 'Ajman Corniche',
        'description' => 'The Ajman Corniche is a waterfront promenade located in Ajman. It features numerous restaurants, cafes, and shops, as well as a beach and a park, and is a popular destination for locals and tourists alike.',
        'rate' => 4.5,
        'image_profile' => Storage::url('image/Ajman Corniche.PNG'),
        'address' => 'Ajman - United Arab Emirates'
    ]);
        DB::table('places')->insert([
            'city_id'=>9,
            'name' => 'Ajman Museum',
            'description' => 'The Ajman Museum is a museum located in the Al Bustan area of Ajman. It is housed in an 18th-century fort and features exhibits on the history and culture of Ajman and the United Arab Emirates.',
            'rate' => 4.6,
            'image_profile' => Storage::url('image/Ajman Museum.PNG'),
            'address' => 'Al Bustan - Ajman - United Arab Emirates',
            'price'=>200
        ]);

        DB::table('places')->insert([
            'city_id'=>9,

            'name' => 'Mowaihat Archaeological Site',
                'description' => 'The Mowaihat Archaeological Site is an archaeological site located in the Mowaihat area of Ajman. It features ancient tombs and artifacts dating back to the Bronze Age, and is a popular destination for history and archaeology enthusiasts.',
                'rate' => 4.5,
                'image_profile' => Storage::url('image/Mowaihat Archaeological Site.PNG'),
                'address' => 'Mowaihat - Ajman - United Arab Emirates',
            'price'=>300

]);
            //london
        DB::table('places')->insert([
            'city_id'=>10,

            'name' => 'The Tower of London',
            'description' => 'The Tower of London is a historic castle located on the north bank of the River Thames in central London. It was built in the 11th century and has served as a royal palace, a prison, and a fortress throughout its history.',
            'rate' => 4.7,
            'image_profile' => Storage::url('image/The Tower of London.PNG'),
            'address' => 'St Katharine\'s & Wapping, London EC3N 4AB, United Kingdom',
            'price'=>500
            ]);

        DB::table('places')->insert([
            'city_id'=>10,

            'name' => 'The British Museum',
            'description' => 'The British Museum is a public institution dedicated to human history, art, and culture. It is located in the Bloomsbury area of London and is known for its vast collection of artifacts from around the world.',
            'rate' => 4.8,
            'image_profile' => Storage::url('image/The British Museum.PNG'),
            'address' => 'Great Russell St, Bloomsbury, London WC1B 3DG, United Kingdom',
            'price'=>300
        ]);
        DB::table('places')->insert([
            'city_id'=>10,

            'name' => 'The London Eye',
            'description' => 'The London Eye is a giant Ferris wheel located on the South Bank of the River Thames. It offers panoramic views of the city and is one of the most popular tourist attractions in London.',
            'rate' => 4.5,
            'image_profile' => Storage::url('image/The London Eye.PNG'),
            'address' => 'Riverside Building, County Hall, Westminster Bridge Rd, Bishop\'s, London SE1 7PB, United Kingdom',
            'price'=>350
        ]);

        DB::table('places')->insert([
            'city_id'=>10,
            'name' => 'Buckingham Palace',
            'description' => 'Buckingham Palace is the official residence of the monarchs of the United Kingdom. It is located in the City of Westminster and is one of the most iconic buildings in London.',
            'rate' => 4.6,
            'image_profile' => Storage::url('image/Buckingham Palace.PNG'),
            'address' => 'Buckingham Palace, London SW1A 1AA, United Kingdom',
            'price'=>500
        ]);

        DB::table('places')->insert([
            'city_id'=>10,
            'name' => 'Westminster Abbey',
            'description' => 'Westminster Abbey is a historic church located in the City of Westminster. It has been the site of numerous royal coronations and weddings, and is the final resting place of many famous historical figures.',
            'rate' => 4.7,
            'image_profile' => Storage::url('image/Westminster Abbey.PNG'),
            'address' => '20 Deans Yd, Westminster, London SW1P 3PA, United Kingdom'
        ]);

        DB::table('places')->insert([
            'city_id'=>10,

            'name' => 'The National Gallery',
            'description' => 'The National Gallery is an art museum located in Trafalgar Square, in the City of Westminster. It is one of the most visited museums in the world, and is home to some of the most important works of Western art.',
            'rate' => 4.8,
            'image_profile' => Storage::url('image/The National Gallery.PNG'),
            'address' => 'Trafalgar Square, Charing Cross, London WC2N 5DN, United Kingdom',
        'price'=>200
        ]);
        //paris
        DB::table('places')->insert([
           'city_id'=>11,

            'name' => 'Eiffel Tower',
            'description' => 'The Eiffel Tower is a wrought-iron lattice tower on the Champ de Mars in Paris, France. It is named after the engineer Gustave Eiffel, whose company designed and built the tower.',
            'rate' => 4.5,
            'image_profile' => Storage::url('image/Eiffel Tower.PNG'),
            'address' => 'Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France'
        ]);

            DB::table('places')->insert([
                'city_id'=>11,

                'name' => 'Louvre Museum',
                'description' => 'The Louvre is the world\'s largest art museum and a historic monument in Paris, France. A central landmark of the city, it is located on the Right Bank of the Seine in the city\'s 1st arrondissement.',
                'rate' => 4.7,
                'image_profile' => Storage::url('image/Louvre Museum.PNG'),
                'address' => 'Rue de Rivoli, 75001 Paris, France',
           'price'=>500
            ]);

        DB::table('places')->insert([
            'city_id'=>11,

            'name' => 'The Palace of Versailles',
            'description' => 'The Palace of Versailles is a former royal residence located in Versailles, France. It was the seat of political power in the Kingdom of France from 1682 to 1789.',
            'rate' => 4.6,
            'image_profile' =>Storage::url('image/The Palace of Versailles.PNG'),
            'address' => 'Place d Armes, 78000 Versailles, France',
            'price'=>200
        ]);
         DB::table('places')->insert([
             'city_id'=>11,
                'name' => 'The Montmartre neighborhood',
                'description' => 'Montmartre is a historic neighborhood located in the 18th arrondissement of Paris. It is known for its bohemian atmosphere, artists, and picturesque streets.',
                'rate' => 4.4,
                'image_profile' => Storage::url('image/The Montmartre neighborhood.PNG'),
                'address' => 'Montmartre, 75018 Paris, France'
           ]);
        DB::table('places')->insert([
            'city_id'=>11,

                'name' => 'The Luxembourg Gardens',
                'description' => 'The Luxembourg Gardens is a public park located in the 6th arrondissement of Paris. It was created in the early 17th century and is known for its beautiful gardens, fountains, and sculptures.',
                'rate' => 4.7,
                'image_profile' => Storage::url('image/The Luxembourg Gardens.PNG'),
                'address' => 'Rue de Médicis, 75006 Paris, France'
        ]);
    }
}
