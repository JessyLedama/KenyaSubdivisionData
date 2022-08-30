<?php

namespace App\Services;

use App\Models\SubCounty;
use Illuminate\Http\Request;

class SubCountyService
{
    public static function all()
    {
        $subCounties = SubCounty::with('county')->paginate(10);
        $subCountiesCount = SubCounty::count();

        return [
            'counties' => $subCounties, 
            'countiesCount' => $subCountiesCount
        ];
    }
}