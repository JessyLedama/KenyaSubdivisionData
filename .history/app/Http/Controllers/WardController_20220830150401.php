<?php

namespace App\Http\Controllers;

use App\Services\WardService;
use Illuminate\Http\Request;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wards = WardService::all();
        $wardsCount = count(Ward::all());

        return view('wards.index', compact('wards', 'wardsCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subCounties = SubCounty::all('name');

        return view('wards.create', compact('subCounties'));
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
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show(Ward $ward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function edit(Ward $ward)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ward $ward)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ward $ward)
    {
        //
    }
}
