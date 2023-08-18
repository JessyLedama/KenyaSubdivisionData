<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\WardService;
use App\Http\Controllers\Controller;

class WardControllerApi extends Controller
{
    public function index(WardService $wardService)
    {
        $wards = $wardService->all();

        return $wards;
    }
}