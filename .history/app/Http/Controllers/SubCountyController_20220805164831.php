<?php

namespace App\Http\Controllers;

use App\Models\SubCounty;
use Illuminate\Http\Request;

class SubCountyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCounties = SubCounty::with()->paginate(10);

        return view('subcounties.index', compact('subCounties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subcounties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCounty  $subCounty
     * @return \Illuminate\Http\Response
     */
    public function show(SubCounty $subCounty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCounty  $subCounty
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCounty $subCounty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCounty  $subCounty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCounty $subCounty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCounty  $subCounty
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCounty $subCounty)
    {
        //
    }
}
