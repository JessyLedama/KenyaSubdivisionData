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
                'county_code' => '002',
                'county_name' => 'Kwale',
            ],
        );
    }
}
