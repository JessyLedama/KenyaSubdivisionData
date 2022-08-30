<?php

namespace App\Services;

use App\Models\Region;

class RegionService 
{
    public static function all()
    {
        $regions = Region::paginate(10);
        $regionsCount = Region::count();

        return [
            'regions' => $regions, 
            'regionsCount' => $regionsCount
        ];
    }
}