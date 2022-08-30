<?php

namespace App\Services;

use App\Models\Region;

class RegionService 
{
    public static function all()
    {
        $regions = County::with('region')->paginate(10);
        $regionsCount = County::count();

        return [
            'counties' => $regions, 
            'countiesCount' => $regionsCount
        ];
    }
}