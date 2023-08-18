<?php

namespace App\Http\Controllers\Api;

use App\Models\County;
use Illuminate\Http\Request;
use App\Services\SubCountyService;
use App\Http\Controllers\Controller;

class SubCountyControllerApi extends Controller
{
    public function index(SubCountyService $subCountyService)
    {
        $subCounties = $subCountyService->all();

        return $subCounties;
    }
}