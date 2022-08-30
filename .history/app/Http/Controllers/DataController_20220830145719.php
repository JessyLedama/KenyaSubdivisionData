<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCountyService;
use App\Services\CountyService;
use App\Services\RegionService;

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

        $subCounties = SubCountyService::all(10);
        $subCountiesCount = count(SubCounty::all());

        return view('summery', compact('regionsCount','countiesCount', 'subCountiesCount', 'regions', 'counties', 'subCounties'));
    }
}
