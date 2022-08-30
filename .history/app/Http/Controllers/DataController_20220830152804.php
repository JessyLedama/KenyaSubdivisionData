<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SubCountyService;
use App\Services\CountyService;
use App\Services\RegionService;
use App\Services\WardService;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regionsData = RegionService::all();
        $regionsCount = $regionsData['regionsCount'];
        $regions = $regionsData['regions'];

        $countiesData = CountyService::all();
        $countiesCount = $countiesData['countiesCount'];
        $counties = $countiesData['counties'];

        $subCountiesData = SubCountyService::all();
        $subCountiesCount = $subCountiesData['countiesCount'];
        $subCounties = $subCountiesData['counties'];

        $wardsData = WardService::all();
        $subwardssCount = $subwardssData['wardssCount'];
        $subwardss = $subwardssData['wardss'];

        return view('summery', compact('regionsCount','countiesCount', 'subCountiesCount', 'regions', 'counties', 'subCounties'));
    }
}
