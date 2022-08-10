<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCounty;

class SubCountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCountiesData = [
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

        $subCounties = SubCounty::all();
        
        if(count($subCounties) < 1){
            foreach($regionsData as $region)
            {
                SubCounty::create($region);
            }
        }
    }
}
