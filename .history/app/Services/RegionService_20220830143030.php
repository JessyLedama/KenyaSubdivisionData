<?php

namespace App\Services;

use App\Models\Region;

class RegionService 
{
    public static function all()
    {
        $regions = Region::with('region')->paginate(10);
        $regionsCount = Region::count();

        return [
            'counties' => $regions, 
            'countiesCount' => $regionsCount
        ];
    }
}