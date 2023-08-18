<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CountyControllerApi;
use App\Http\Controllers\Api\SubCountyControllerApi;
use App\Http\Controllers\Api\RegionControllerApi;
use App\Http\Controllers\Api\WardControllerApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get regions data
Route::get('/regions', [RegionControllerApi::class, 'index'])->name('regions.api');

// get counties data
Route::get('/counties', [CountyControllerApi::class, 'index'])->name('counties.api');

// get subcounties data
Route::get('/sub-counties', [SubCountyControllerApi::class, 'index'])->name('sub-counties.api');

// get wards data
Route::get('/wards', [WardControllerApi::class, 'index'])->name('wards.api');
