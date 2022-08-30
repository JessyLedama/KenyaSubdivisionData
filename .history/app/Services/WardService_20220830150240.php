<?php

namespace App\Services;

use App\Models\Ward;
use Illuminate\Http\Request;

class WardService
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