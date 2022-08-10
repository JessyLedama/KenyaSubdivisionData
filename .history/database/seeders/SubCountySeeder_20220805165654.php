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
                'name' => 'Changamwe',
                'county_id' => '1',
            ],

            [
                'name' => 'Jomvu',
                'county_id' => '1',
            ],

            [
                'name' => 'Kisauni',
                'county_id' => '1',
            ],

            [
                'name' => 'Nyali',
                'county_id' => '1',
            ],

            [
                'name' => 'Likoni',
                'county_id' => '1',
            ],

            [
                'name' => 'Mvita',
                'county_id' => '',
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
            foreach($subCountiesData as $subCounty)
            {
                SubCounty::create($subCounty);
            }
        }
    }
}
