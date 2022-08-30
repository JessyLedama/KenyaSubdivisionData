<?php

namespace App\Services;

use App\Models\Region;

class RegionService 
{
    public static function all()
    {
        $counties = County::with('region')->paginate(10);
        $countiesCount = County::count();

        return [
            'counties' => $counties, 
            'countiesCount' => $countiesCount
        ];
    }
}