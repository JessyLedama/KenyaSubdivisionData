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
        DB::table('counties')->insert([
            'county_name' => 'Mombasa',
            'county_name' => 'Mombasa',
        ]);
    }
}
