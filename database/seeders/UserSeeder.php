<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customer')->insert([
            'name'=>Str::random(10),
            // 'name'=>'Something',
            'email'=>Str::random(10).'@gmail.com',
            'password'=>bcrypt('123000'),
            // 'password'=>Str::random(),
            'file'=>Str::random(15).'.png'  
        ]);
    }
}
