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
                'region_id' => '5',
            ],

            [
                'county_code' => '002',
                'county_name' => 'Kwale',
                'region_id' => '5',
            ],

            [
                'county_code' => '003',
                'county_name' => 'Kilifi',
                'region_id' => '5',
            ],

            [
                'county_code' => '004',
                'county_name' => 'Tana River',
                'region_id' => '5',
            ],

            [
                'county_code' => '005',
                'county_name' => 'Lamu',
                'region_id' => '5',
            ],

            [
                'county_code' => '006',
                'county_name' => 'Taita/Taveta',
                'region_id' => '5',
            ],

            [
                'county_code' => '007',
                'county_name' => 'Garissa',
                'region_id' => '4',
            ],

            [
                'county_code' => '008',
                'county_name' => 'Wajir',
                'region_id' => '4',
            ],

            [
                'county_code' => '009',
                'county_name' => 'Mandera',
                'region_id' => '4',
            ],

            [
                'county_code' => '010',
                'county_name' => 'Marsabit',
                'region_id' => '3',
            ],

            [
                'county_code' => '011',
                'county_name' => 'Isiolo',
                'region_id' => '3',
            ],

            [
                'county_code' => '012',
                'county_name' => 'Meru',
                'region_id' => '3',
            ],

            [
                'county_code' => '013',
                'county_name' => 'Tharaka-Nithi',
                'region_id' => '3',
            ],

            [
                'county_code' => '014',
                'county_name' => 'Embu',
                'region_id' => '3',
            ],

            [
                'county_code' => '015',
                'county_name' => 'Kitui',
                'region_id' => '3',
            ],

            [
                'county_code' => '016',
                'county_name' => 'Machakos',
                'region_id' => '3',
            ],

            [
                'county_code' => '017',
                'county_name' => 'Makueni',
                'region_id' => '3',
            ],

            [
                'county_code' => '018',
                'county_name' => 'Nyandarua',
                'region_id' => '2',
            ],

            [
                'county_code' => '019',
                'county_name' => 'Nyeri',
                'region_id' => '2',
            ],

            [
                'county_code' => '020',
                'county_name' => 'Kirinyaga',
                'region_id' => '2',
            ],

            [
                'county_code' => '021',
                'county_name' => 'Muranga',
                'region_id' => '2',
            ],

            [
                'county_code' => '022',
                'county_name' => 'Kiambu',
                'region_id' => '2',
            ],

            [
                'county_code' => '023',
                'county_name' => 'Turkana',
                'region_id' => '6',
            ],

            [
                'county_code' => '024',
                'county_name' => 'West Pokot',
                'region_id' => '6',
            ],

            [
                'county_code' => '025',
                'county_name' => 'Samburu',
                'region_id' => '6',
            ],

            [
                'county_code' => '026',
                'county_name' => 'Trans Nzoia',
                'region_id' => '6',
            ],

            [
                'county_code' => '027',
                'county_name' => 'Uasin Gishu',
                'region_id' => '6',
            ],

            [
                'county_code' => '028',
                'county_name' => 'Elgeyo/Marakwet',
            ],

            [
                'county_code' => '029',
                'county_name' => 'Nandi',
            ],

            [
                'county_code' => '030',
                'county_name' => 'Baringo',
            ],

            [
                'county_code' => '031',
                'county_name' => 'Laikipia',
            ],

            [
                'county_code' => '032',
                'county_name' => 'Nakuru',
            ],

            [
                'county_code' => '033',
                'county_name' => 'Narok',
            ],

            [
                'county_code' => '034',
                'county_name' => 'Kajiado',
            ],

            [
                'county_code' => '035',
                'county_name' => 'Kericho',
            ],

            [
                'county_code' => '036',
                'county_name' => 'Bomet',
            ],

            [
                'county_code' => '037',
                'county_name' => 'Kakamega',
            ],

            [
                'county_code' => '038',
                'county_name' => 'Vihiga',
            ],

            [
                'county_code' => '039',
                'county_name' => 'Bungoma',
            ],

            [
                'county_code' => '040',
                'county_name' => 'Busia',
            ],

            [
                'county_code' => '041',
                'county_name' => 'Siaya',
            ],

            [
                'county_code' => '042',
                'county_name' => 'Kisumu',
            ],

            [
                'county_code' => '043',
                'county_name' => 'Homa Bay',
            ],

            [
                'county_code' => '044',
                'county_name' => 'Migori',
            ],

            [
                'county_code' => '045',
                'county_name' => 'Kisii',
            ],

            [
                'county_code' => '046',
                'county_name' => 'Nyamira',
            ],

            [
                'county_code' => '047',
                'county_name' => 'Nairobi',
            ],
        ];

        $counties = County::all();
        
        if(count($counties) < 1){
            foreach($countiesData as $county)
            {
                County::create($county);
            }
        }
    }
}
