<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accounts')->insert([
            'bank_id'=>1,
            'email'=>'motasem@gmail.com',
            'password'=>'123456',
            'balance'=>10000
        ]);
        DB::table('accounts')->insert([
            'bank_id'=>1,
            'email'=>'haidar@gmail.com',
            'password'=>'123456',
            'balance'=>5000
        ]);
        DB::table('accounts')->insert([
            'bank_id'=>1,
            'email'=>'zain@gmail.com',
            'password'=>'123456',
            'balance'=>20000
        ]);
        DB::table('accounts')->insert([
            'bank_id'=>1,
            'email'=>'sleman@gmail.com',
            'password'=>'123456',
            'balance'=>12000
        ]);
        DB::table('accounts')->insert([
            'bank_id'=>1,
            'email'=>'rami@gmail.com',
            'password'=>'123456',
            'balance'=>1500
        ]);
    }
}
