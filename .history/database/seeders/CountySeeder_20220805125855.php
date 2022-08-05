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
        ];
        
        foreach($countiesData as $county)
        {
            County::
        }
    }
}
