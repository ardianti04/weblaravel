<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('edulevels')->insert([

            ['name' => 'SD Sederajat',
            'desc' => 'SD / MI',],
            
            ['name' => 'SMP Sederajat',
            'desc' => 'SMP / MA',],
           
        ]);
    }
}
