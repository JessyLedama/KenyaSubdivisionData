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
        $ward
        $wards = Ward::all();
        
        if(count($wards) < 1){
            foreach($wardsData as $ward)
            {
                Ward::create($ward);
            }
        }
    }
}
