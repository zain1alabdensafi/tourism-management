<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class imageplaceseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('image_places')->insert([
            'places_id'=>1,
            'image'=>Storage::url('image/al azem palace2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>1,
            'image'=>Storage::url('image/al azem palace3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>1,
            'image'=>Storage::url('image/al azem palace4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>2,
            'image'=>Storage::url('image/national museum2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>2,
            'image'=>Storage::url('image/national museum3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>2,
            'image'=>Storage::url('image/national museum4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>3,
            'image'=>Storage::url('image/the straight street2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>3,
            'image'=>Storage::url('image/the straight street3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>3,
            'image'=>Storage::url('image/the straight street4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>4,
            'image'=>Storage::url('image/the umayyad mosque2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>4,
            'image'=>Storage::url('image/the umayyad mosque3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>4,
            'image'=>Storage::url('image/the umayyad mosque4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>4,
            'image'=>Storage::url('image/the umayyad mosque5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>5,
            'image'=>Storage::url('image/citadel of damascus2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>5,
            'image'=>Storage::url('image/citadel of damascus3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>5,
            'image'=>Storage::url('image/citadel of damascus4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>5,
            'image'=>Storage::url('image/citadel of damascus5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>5,
            'image'=>Storage::url('image/citadel of damascus6.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>6,
            'image'=>Storage::url('image/Souq Al-Hamidiyah2.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>6,
            'image'=>Storage::url('image/Souq Al-Hamidiyah3.PNG')
        ]);
        DB::table('image_places')->insert([
        'places_id'=>6,
        'image'=>Storage::url('image/Souq Al-Hamidiyah4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>6,
            'image'=>Storage::url('image/Souq Al-Hamidiyah5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>7,
            'image'=>Storage::url('image/tartous national museum2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>7,
            'image'=>Storage::url('image/tartous national museum3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>7,
            'image'=>Storage::url('image/tartous national museum4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>7,
            'image'=>Storage::url('image/tartous national museum5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>7,
            'image'=>Storage::url('image/tartous national museum6.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>8,
            'image'=>Storage::url('image/arwad island2.jpg')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>8,
            'image'=>Storage::url('image/arwad island3.jpg')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>8,
            'image'=>Storage::url('image/arwad island4.jpg')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>8,
            'image'=>Storage::url('image/arwad island5.jpg')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>8,
            'image'=>Storage::url('image/arwad island6.jpg')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>9,
            'image'=>Storage::url('image/tartous citadel2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>9,
            'image'=>Storage::url('image/tartous citadel3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>9,
            'image'=>Storage::url('image/tartous citadel4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>9,
            'image'=>Storage::url('image/tartous citadel5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>9,
            'image'=>Storage::url('image/tartous citadel6.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>10,
            'image'=>Storage::url('image/Al-Omari Mosque2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>10,
            'image'=>Storage::url('image/Al-Omari Mosque3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>10,
            'image'=>Storage::url('image/Al-Omari Mosque4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>10,
            'image'=>Storage::url('image/Al-Omari Mosque5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>10,
            'image'=>Storage::url('image/Al-Omari Mosque6.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>11,
            'image'=>Storage::url('image/Latakia Citadel1.jpg')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>11,
            'image'=>Storage::url('image/Latakia Citadel2.jpg')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>11,
            'image'=>Storage::url('image/Latakia Citadel3.jpg')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>11,
            'image'=>Storage::url('image/Latakia Citadel4.jpg')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>11,
            'image'=>Storage::url('image/Latakia Citadel5.jpg')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>12,
            'image'=>Storage::url('image/Al-Mina Archaeological Site2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>12,
            'image'=>Storage::url('image/Al-Mina Archaeological Site3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>12,
            'image'=>Storage::url('image/Al-Mina Archaeological Site4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>12,
            'image'=>Storage::url('image/Al-Mina Archaeological Site5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>13,
            'image'=>Storage::url('image/latakia corniche2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>13,
            'image'=>Storage::url('image/latakia corniche3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>13,
            'image'=>Storage::url('image/latakia corniche4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>13,
            'image'=>Storage::url('image/latakia corniche5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>14,
            'image'=>Storage::url('image/ugarit2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>14,
            'image'=>Storage::url('image/ugarit3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>14,
            'image'=>Storage::url('image/ugarit4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>14,
            'image'=>Storage::url('image/ugarit5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>15,
            'image'=>Storage::url('image/crac des oliviers1.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>15,
            'image'=>Storage::url('image/crac des oliviers2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>15,
            'image'=>Storage::url('image/crac des oliviers3.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>15,
            'image'=>Storage::url('image/crac des oliviers4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>16,
            'image'=>Storage::url('image/Khaled ibn Al-Walid Mosque2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>16,
            'image'=>Storage::url('image/Khaled ibn Al-Walid Mosque3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>16,
            'image'=>Storage::url('image/Khaled ibn Al-Walid Mosque4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>16,
            'image'=>Storage::url('image/Khaled ibn Al-Walid Mosque5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>17,
            'image'=>Storage::url('image/Qattina Lake2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>17,
            'image'=>Storage::url('image/Qattina Lake3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>17,
            'image'=>Storage::url('image/Qattina Lake.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>17,
            'image'=>Storage::url('image/Qattina Lake5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>18,
            'image'=>Storage::url('image/homs new clock tower2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>18,
            'image'=>Storage::url('image/homs new clock tower3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>18,
            'image'=>Storage::url('image/homs new clock tower4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>19,
            'image'=>Storage::url('image/palmyra city2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>19,
            'image'=>Storage::url('image/palmyra city3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>19,
            'image'=>Storage::url('image/palmyra city4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>19,
            'image'=>Storage::url('image/palmyra city5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>20,
            'image'=>Storage::url('image/National Museum of Aleppo2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>20,
            'image'=>Storage::url('image/National Museum of Aleppo3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>20,
            'image'=>Storage::url('image/National Museum of Aleppo4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>20,
            'image'=>Storage::url('image/National Museum of Aleppo5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>21,
            'image'=>Storage::url('image/Saint Simeons Basilica2.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>21,
            'image'=>Storage::url('image/Saint Simeons Basilica3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>21,
            'image'=>Storage::url('image/Saint Simeons Basilica4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>21,
            'image'=>Storage::url('image/Saint Simeons Basilica5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>22,
            'image'=>Storage::url('image/Bab al-Faraj clock2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>22,
            'image'=>Storage::url('image/Bab al-Faraj clock3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>22,
            'image'=>Storage::url('image/Bab al-Faraj clock4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>23,
            'image'=>Storage::url('image/Citadel of Aleppo2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>23,
            'image'=>Storage::url('image/Citadel of Aleppo3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>23,
            'image'=>Storage::url('image/Citadel of Aleppo4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>23,
            'image'=>Storage::url('image/Citadel of Aleppo5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>24,
            'image'=>Storage::url('image/Great Mosque of Aleppo2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>24,
            'image'=>Storage::url('image/Great Mosque of Aleppo3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>24,
            'image'=>Storage::url('image/Great Mosque of Aleppo4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>24,
            'image'=>Storage::url('image/Great Mosque of Aleppo5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>25,
            'image'=>Storage::url('image/Al-Madina Souq in aleppo2.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>25,
            'image'=>Storage::url('image/Al-Madina Souq in aleppo3.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>25,
            'image'=>Storage::url('image/Al-Madina Souq in aleppo4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>25,
            'image'=>Storage::url('image/Al-Madina Souq in aleppo5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>26,
            'image'=>Storage::url('image/Emirates Palace2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>26,
            'image'=>Storage::url('image/Emirates Palace3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>26,
            'image'=>Storage::url('image/Emirates Palace4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>26,
            'image'=>Storage::url('image/Emirates Palace5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>27,
            'image'=>Storage::url('image/Qasr Al Watan2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>27,
            'image'=>Storage::url('image/Qasr Al Watan3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>27,
            'image'=>Storage::url('image/Qasr Al Watan4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>27,
            'image'=>Storage::url('image/Qasr Al Watan5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>28,
            'image'=>Storage::url('image/Yas Marina Circuit2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>28,
            'image'=>Storage::url('image/Yas Marina Circuit3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>28,
            'image'=>Storage::url('image/Yas Marina Circuit4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>28,
            'image'=>Storage::url('image/Yas Marina Circuit5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>29,
            'image'=>Storage::url('image/Sheikh Zayed Grand Mosque2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>29,
            'image'=>Storage::url('image/Sheikh Zayed Grand Mosque3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>29,
            'image'=>Storage::url('image/Sheikh Zayed Grand Mosque4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>29,
            'image'=>Storage::url('image/Sheikh Zayed Grand Mosque5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>30,
            'image'=>Storage::url('image/Louvre Abu Dhabi2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>30,
            'image'=>Storage::url('image/Louvre Abu Dhabi3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>30,
            'image'=>Storage::url('image/Louvre Abu Dhabi4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>30,
            'image'=>Storage::url('image/Louvre Abu Dhabi5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>31,
            'image'=>Storage::url('image/Ferrari World Abu Dhabi2.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>31,
            'image'=>Storage::url('image/Ferrari World Abu Dhabi3.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>31,
            'image'=>Storage::url('image/Ferrari World Abu Dhabi4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>31,
            'image'=>Storage::url('image/Ferrari World Abu Dhabi5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>32,
            'image'=>Storage::url('image/Burj Khalifa2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>32,
            'image'=>Storage::url('image/Burj Khalifa3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>32,
            'image'=>Storage::url('image/Burj Khalifa4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>32,
            'image'=>Storage::url('image/Burj Khalifa5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>33,
            'image'=>Storage::url('image/The Dubai Mall.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>33,
            'image'=>Storage::url('image/The Dubai Mall2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>33,
            'image'=>Storage::url('image/The Dubai Mall3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>33,
            'image'=>Storage::url('image/The Dubai Mall4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>34,
            'image'=>Storage::url('image/The Dubai Fountain2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>34,
            'image'=>Storage::url('image/The Dubai Fountain3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>34,
            'image'=>Storage::url('image/The Dubai Fountain4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>34,
            'image'=>Storage::url('image/The Dubai Fountain5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>35,
            'image'=>Storage::url('image/Palm Jumeirah2.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>35,
            'image'=>Storage::url('image/Palm Jumeirah3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>35,
            'image'=>Storage::url('image/Palm Jumeirah4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>35,
            'image'=>Storage::url('image/Palm Jumeirah5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>36,
            'image'=>Storage::url('image/Dubai Miracle Garden2.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>36,
            'image'=>Storage::url('image/Dubai Miracle Garden3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>36,
            'image'=>Storage::url('image/Dubai Miracle Garden4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>36,
            'image'=>Storage::url('image/Dubai Miracle Garden5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>37,
            'image'=>Storage::url('image/Dubai Museum2.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>37,
            'image'=>Storage::url('image/Dubai Museum3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>37,
            'image'=>Storage::url('image/Dubai Museum4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>38,
            'image'=>Storage::url('image/Al Qasba2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>38,
            'image'=>Storage::url('image/Al Qasba3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>38,
            'image'=>Storage::url('image/Al Qasba4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>38,
            'image'=>Storage::url('image/Al Qasba5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>39,
            'image'=>Storage::url('image/Sharjah Heritage Area2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>39,
            'image'=>Storage::url('image/Sharjah Heritage Area3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>39,
            'image'=>Storage::url('image/Sharjah Heritage Area4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>40,
            'image'=>Storage::url('image/Sharjah Science Museum2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>40,
            'image'=>Storage::url('image/Sharjah Science Museum3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>40,
            'image'=>Storage::url('image/Sharjah Science Museum4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>40,
            'image'=>Storage::url('image/Sharjah Science Museum5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>41,
            'image'=>Storage::url('image/Al Noor Island2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>41,
            'image'=>Storage::url('image/Al Noor Island3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>41,
            'image'=>Storage::url('image/Al Noor Island4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>41,
            'image'=>Storage::url('image/Al Noor Island5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>42,
            'image'=>Storage::url('image/Sharjah Art Museum2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>42,
            'image'=>Storage::url('image/Sharjah Art Museum3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>42,
            'image'=>Storage::url('image/Sharjah Art Museum4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>42,
            'image'=>Storage::url('image/Sharjah Art Museum5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>43,
            'image'=>Storage::url('image/Sharjah Aquarium2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>43,
            'image'=>Storage::url('image/Sharjah Aquarium3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>43,
            'image'=>Storage::url('image/Sharjah Aquarium4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>43,
            'image'=>Storage::url('image/Sharjah Aquarium5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>44,
            'image'=>Storage::url('image/Sheikh Zayed Mosque Ajman2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>44,
            'image'=>Storage::url('image/Sheikh Zayed Mosque Ajman3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>44,
            'image'=>Storage::url('image/Sheikh Zayed Mosque Ajman4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>44,
            'image'=>Storage::url('image/Sheikh Zayed Mosque Ajman5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>45,
            'image'=>Storage::url('image/Al Zorah Nature Reserve2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>45,
            'image'=>Storage::url('image/Al Zorah Nature Reserve3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>45,
            'image'=>Storage::url('image/Al Zorah Nature Reserve4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>45,
            'image'=>Storage::url('image/Al Zorah Nature Reserve5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>46,
            'image'=>Storage::url('image/Ajman Corniche2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>46,
            'image'=>Storage::url('image/Ajman Corniche3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>46,
            'image'=>Storage::url('image/Ajman Corniche4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>47,
            'image'=>Storage::url('image/Ajman Museum2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>47,
            'image'=>Storage::url('image/Ajman Museum3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>47,
            'image'=>Storage::url('image/Ajman Museum4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>47,
            'image'=>Storage::url('image/Ajman Museum5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>48,
            'image'=>Storage::url('image/Mowaihat Archaeological Site2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>48,
            'image'=>Storage::url('image/Mowaihat Archaeological Site3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>48,
            'image'=>Storage::url('image/Mowaihat Archaeological Site4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>49,
            'image'=>Storage::url('image/The Tower of London2.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>49,
            'image'=>Storage::url('image/The Tower of London3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>49,
            'image'=>Storage::url('image/The Tower of London4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>49,
            'image'=>Storage::url('image/The Tower of London5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>49,
            'image'=>Storage::url('image/The Tower of London6.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>50,
            'image'=>Storage::url('image/The British Museum2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>50,
            'image'=>Storage::url('image/The British Museum3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>50,
            'image'=>Storage::url('image/The British Museum4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>50,
            'image'=>Storage::url('image/The British Museum5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>50,
            'image'=>Storage::url('image/The British Museum6.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>51,
            'image'=>Storage::url('image/The London Eye2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>51,
            'image'=>Storage::url('image/The London Eye3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>51,
            'image'=>Storage::url('image/The London Eye4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>51,
            'image'=>Storage::url('image/The London Eye5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>51,
            'image'=>Storage::url('image/The London Eye6.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>52,
            'image'=>Storage::url('image/Buckingham Palace2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>52,
            'image'=>Storage::url('image/Buckingham Palace3.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>52,
            'image'=>Storage::url('image/Buckingham Palace4.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>52,
            'image'=>Storage::url('image/Buckingham Palace5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>52,
            'image'=>Storage::url('image/Buckingham Palace6.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>53,
            'image'=>Storage::url('image/Westminster Abbey2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>53,
            'image'=>Storage::url('image/Westminster Abbey3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>53,
            'image'=>Storage::url('image/Westminster Abbey4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>53,
            'image'=>Storage::url('image/Westminster Abbey5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>53,
            'image'=>Storage::url('image/Westminster Abbey6.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>54,
            'image'=>Storage::url('image/The National Gallery2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>54,
            'image'=>Storage::url('image/The National Gallery3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>54,
            'image'=>Storage::url('image/The National Gallery4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>54,
            'image'=>Storage::url('image/The National Gallery5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>54,
            'image'=>Storage::url('image/The National Gallery6.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>55,
            'image'=>Storage::url('image/Eiffel Tower2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>55,
            'image'=>Storage::url('image/Eiffel Tower3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>55,
            'image'=>Storage::url('image/Eiffel Tower4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>55,
            'image'=>Storage::url('image/Eiffel Tower5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>56,
            'image'=>Storage::url('image/Louvre Museum2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>56,
            'image'=>Storage::url('image/Louvre Museum3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>56,
            'image'=>Storage::url('image/Louvre Museum4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>56,
            'image'=>Storage::url('image/Louvre Museum5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>57,
            'image'=>Storage::url('image/The Palace of Versailles2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>57,
            'image'=>Storage::url('image/The Palace of Versailles3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>57,
            'image'=>Storage::url('image/The Palace of Versailles4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>57,
            'image'=>Storage::url('image/The Palace of Versailles5.PNG')
        ]);
        DB::table('image_places')->insert([
            'places_id'=>58,
            'image'=>Storage::url('image/The Montmartre neighborhood2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>58,
            'image'=>Storage::url('image/The Montmartre neighborhood3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>58,
            'image'=>Storage::url('image/The Montmartre neighborhood4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>58,
            'image'=>Storage::url('image/The Montmartre neighborhood5.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>59,
            'image'=>Storage::url('image/The Luxembourg Gardens2.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>59,
            'image'=>Storage::url('image/The Luxembourg Gardens3.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>59,
            'image'=>Storage::url('image/The Luxembourg Gardens4.PNG')
        ]);

        DB::table('image_places')->insert([
            'places_id'=>59,
            'image'=>Storage::url('image/The Luxembourg Gardens5.PNG')
        ]);
    }
}
