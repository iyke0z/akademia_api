<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\City;
use App\Models\Country;
use App\Models\State;

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
Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});
Route::get('country/', function () {
    $country = Country::all();
    return response()->json($country);
});
Route::get('state/{countryid}', function ($countryid) {
    $state = State::where('countryid', $countryid)->get();
    return response()->json($state);
});
Route::get('city/{stateid}', function ($stateid) {
    $city = City::where('stateid', $stateid)->get();
    return response()->json($city);
});

Route::post('/schregister', [\App\Http\Controllers\Auth\RegisterController::class, 'registerSchool'])->name('registerschool');
Route::post('/login',[\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout',[\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

