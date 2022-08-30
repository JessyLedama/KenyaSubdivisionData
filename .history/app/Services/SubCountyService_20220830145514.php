<?php

namespace App\Services;

use App\Models\SubCounty;
use Illuminate\Http\Request;

class SubCountyService
{
    public static function all()
    {
        $subcounties = County::with('region')->paginate(10);
        $countiesCount = County::count();

        return [
            'counties' => $counties, 
            'countiesCount' => $countiesCount
        ];
    }
}