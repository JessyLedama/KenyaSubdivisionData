<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use 

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countiesData = [
            'county_code' => '001',
            'county_name' => 'Mombasa',
        ];
        
        $counties = County::create($countiesData);
    }
}
