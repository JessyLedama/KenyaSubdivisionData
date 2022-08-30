<?php

namespace App\Services;

use App\Models\County;
use Illuminate\Http\Request;

class CountyService
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

    public function create(Request $request)
    {

    }
}