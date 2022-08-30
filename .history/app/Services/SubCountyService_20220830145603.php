<?php

namespace App\Services;

use App\Models\SubCounty;
use Illuminate\Http\Request;

class SubCountyService
{
    public static function all()
    {
        $subCountiesData = SubCounty::with('county')->paginate(10);
        $subCountiesCount = SubCounty::count();

        return [
            'counties' => $counties, 
            'countiesCount' => $countiesCount
        ];
    }
}