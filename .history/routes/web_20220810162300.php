<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\SubCountyController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RegionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DataController::class, 'index'])->name('counties.index');

Route::get('/counties', [CountyController::class, 'index'])->name('counties.index');

Route::get('/sub-counties', [SubCountyController::class, 'index'])->name('subCounties.index');

Route::get('/regions', [RegionController::class, 'index'])->name('regions.index');
