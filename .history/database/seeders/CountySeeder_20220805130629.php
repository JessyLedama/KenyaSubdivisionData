<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\County;

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
            [
                'county_code' => '001',
                'county_name' => 'Mombasa',
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

            [
                'county_code' => '011',
                'county_name' => 'Isiolo',
            ],

            [
                'county_code' => '012',
                'county_name' => 'Meru',
            ],

            [
                'county_code' => '013',
                'county_name' => 'Tharaka-Nithi',
            ],

            [
                'county_code' => '014',
                'county_name' => 'Embu',
            ],

            [
                'county_code' => '015',
                'county_name' => 'Kitui',
            ],

            [
                'county_code' => '016',
                'county_name' => 'Machakos',
            ],

            [
                'county_code' => '017',
                'county_name' => 'Makueni',
            ],

            [
                'county_code' => '018',
                'county_name' => 'Nyandarua',
            ],

            [
                'county_code' => '019',
                'county_name' => 'Nyeri',
            ],

            [
                'county_code' => '020',
                'county_name' => 'Kirinyaga',
            ],

            [
                'county_code' => '021',
                'county_name' => 'Kwale',
            ],
        ];
        
        foreach($countiesData as $county)
        {
            County::create($county);
        }
    }
}
