<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties')->insert(
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
                'county_code' => '002',
                'county_name' => 'Kwale',
            ],
        );
    }
}
