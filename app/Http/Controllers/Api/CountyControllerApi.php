<?php

namespace App\Http\Controllers\Api;

use App\Models\County;
use Illuminate\Http\Request;
use App\Services\CountyService;
use App\Http\Controllers\Controller;

class CountyControllerApi extends Controller
{
    public function index(CountyService $countyService)
    {
        $counties = $countyService->all();

        return $counties;
    }
}