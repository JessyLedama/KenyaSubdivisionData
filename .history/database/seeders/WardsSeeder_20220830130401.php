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

            [
                'name' => 'Chaani',
                'subcounty_id' => '1',
            ],

            [
                'name' => 'Jomvu Kuu',
                'subcounty_id' => '2',
            ],

            [
                'name' => 'Magongo',
                'subcounty_id' => '2',
            ],

            [
                'name' => 'Mikindani',
                'subcounty_id' => '2',
            ],

            [
                'name' => 'Mjambere',
                'subcounty_id' => '3',
            ],

            [
                'name' => 'Junda',
                'subcounty_id' => '3',
            ],

            [
                'name' => 'Bamburi ',
                'subcounty_id' => '3',
            ],

            [
                'name' => 'Mwakirunge ',
                'subcounty_id' => '3',
            ],

            [
                'name' => 'Mtopanga ',
                'subcounty_id' => '3',
            ],

            [
                'name' => 'Magogoni ',
                'subcounty_id' => '3',
            ],

            [
                'name' => 'Shanzu ',
                'subcounty_id' => '3',
            ],

            [
                'name' => 'Frere',
                'subcounty_id' => '4',
            ],

            [
                'name' => "Ziwa La Ng'ombe",
                'subcounty_id' => '4',
            ],

            [
                'name' => "Mkomani",
                'subcounty_id' => '4',
            ],

            [
                'name' => "Kongowea",
                'subcounty_id' => '4',
            ],

            [
                'name' => "Kadzandani",
                'subcounty_id' => '4',
            ],

            [
                'name' => "Timbwani",
                'subcounty_id' => '5',
            ],

            [
                'name' => "Bofu",
                'subcounty_id' => '5',
            ],

            [
                'name' => "Mtongwe",
                'subcounty_id' => '5',
            ],

            [
                'name' => "Likoni",
                'subcounty_id' => '5',
            ],

            [
                'name' => "Shika Adabu",
                'subcounty_id' => '5',
            ],

            [
                'name' => "Bondeni",
                'subcounty_id' => '6',
            ],

            [
                'name' => "King'orani",
                'subcounty_id' => '6',
            ],

            [
                'name' => "Majengo",
                'subcounty_id' => '6',
            ],

            [
                'name' => "Mwembe Tayari",
                'subcounty_id' => '6',
            ],

            [
                'name' => "Shimanzi",
                'subcounty_id' => '6',
            ],

            [
                'name' => "Tononoka",
                'subcounty_id' => '6',
            ],

            [
                'name' => "Tsimba Golini",
                'subcounty_id' => '7',
            ],

            [
                'name' => "Waa",
                'subcounty_id' => '7',
            ],

            [
                'name' => "Tiwi",
                'subcounty_id' => '7',
            ],
        ];

        $wards = Ward::all();
        
        if(count($wards) < 1){
            foreach($wardsData as $ward)
            {
                Ward::create($ward);
            }
        }
    }
}
