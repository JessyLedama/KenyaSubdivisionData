<?php

namespace App\Services;

use App\Models\Ward;
use Illuminate\Http\Request;

class WardService
{
    public static function all()
    {
        $wards = Ward::with('subcounty')->paginate(10);
        $wardsCount = Ward::count();

        return [
            'wards' => $wards, 
            'wardsCount' => $wardsCount
        ];
    }
}