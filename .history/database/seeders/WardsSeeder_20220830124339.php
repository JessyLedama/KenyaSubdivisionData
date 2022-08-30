<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ward;

class WardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wardsData = [
            [
                'name' => 'Port Reitz',
                'subcounty_id' => '1',
            ],

            [
                'name' => 'Kipevu',
                'subcounty_id' => '1',
            ],

            [
                'name' => 'Airport',
                'subcounty_id' => '1',
            ],

            [
                'name' => 'Miritini',
                'subcounty_id' => '1',
            ],
        ]
        $wards = Ward::all();
        
        if(count($wards) < 1){
            foreach($wardsData as $ward)
            {
                Ward::create($ward);
            }
        }
    }
}
