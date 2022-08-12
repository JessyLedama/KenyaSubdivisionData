<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCounty;
use App\Models\County;
use App\Models\Region;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        $counties = County::paginate(10);
        $subCounties = SubCounty::with('county')->paginate(10);
        $regionsCount = count($regions);
        $countiesCount = count(County::all());
        $subCountiesCount = count($subCounties);

        return view('summery', compact('regionsCount','countiesCount', 'subCountiesCount', 'regions', 'counties', 'subCounties'));
    }
}
