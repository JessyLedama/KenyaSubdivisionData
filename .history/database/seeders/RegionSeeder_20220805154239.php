<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regionsData = [
            [
                'name' => 'Nairobi',
            ],

            [
                'name' => 'Central',
            ],

            [
                'name' => 'Eastern',
            ],

            [
                'name' => 'North Eastern',
            ],

            [
                'name' => 'Coast',
            ],

            [
                'name' => 'Rift Valley',
            ],

            [
                'name' => 'Western',
            ],

            [
                'name' => 'Nyanza',
            ],
        ];

        $regionss = County::all();
        
        if(count($regionss) < 1){
            foreach($countiesData as $county)
            {
                County::create($county);
            }
        }
    }
}
