<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'First_name'=>'motasem',
            'email'=>'motasemnassif2@gmail.com',
            'password'=>Hash::make('123456')
        ]);
        DB::table('users')->insert([
            'First_name'=>'Zain',
            'email'=> 'zeinalabdensafi@gmail.com',
            'password' => Hash::make('213123')
        ]);
        DB::table('users')->insert([
            'First_name'=>'Haider',
            'email'=> 'haidardaoud@gmail.com',
            'password' => Hash::make('1234567890')
        ]);
    }
}
