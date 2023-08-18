<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\RegionService;
use App\Http\Controllers\Controller;

class RegionControllerApi extends Controller
{
    public function index(RegionService $regionService)
    {
        $regions = $regionService->all();

        return $regions;
    }
}