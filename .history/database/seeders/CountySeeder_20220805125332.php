<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            
        ];
        DB::table('counties')->insert(
            [
                
            ],

            [
                'county_code' => '002',
                'county_name' => 'Kwale',
            ],

            [
                'county_code' => '003',
                'county_name' => 'Kilifi',
            ],

            [
                'county_code' => '004',
                'county_name' => 'Tana River',
            ],

            [
                'county_code' => '005',
                'county_name' => 'Lamu',
            ],

            [
                'county_code' => '006',
                'county_name' => 'Taita/Taveta',
            ],

            [
                'county_code' => '007',
                'county_name' => 'Garissa',
            ],

            [
                'county_code' => '008',
                'county_name' => 'Wajir',
            ],

            [
                'county_code' => '009',
                'county_name' => 'Mandera',
            ],

            [
                'county_code' => '010',
                'county_name' => 'Marsabit',
            ],
        );
    }
}
