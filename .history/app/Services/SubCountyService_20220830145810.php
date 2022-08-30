<?php

namespace App\Services;

use App\Models\SubCounty;
use Illuminate\Http\Request;

class SubCountyService
{
    public static function all()
    {
        $subCounties = SubCounty::with('region')->paginate(10);
        $subCountiesCount = County::count();

        return [
            'counties' => $subCounties, 
            'countiesCount' => $subCountiesCount
        ];
    }
}