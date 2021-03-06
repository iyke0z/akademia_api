<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Facades\Auth;

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

Route::get('state/{countryid}', function ($countryid) {
    $state = State::where('countryid', $countryid)->get();
    return response()->json($state);
});
Route::get('city/{stateid}', function ($stateid) {
    $city = City::where('stateid', $stateid)->get();
    return response()->json($city);
});
// Auth
Route::post('/schregister', [\App\Http\Controllers\Auth\RegisterController::class, 'registerSchool'])->name('registerschool');
Route::post('/login',[\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout',[\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/country',[\App\Http\Controllers\CountryController::class, 'store']);
Route::get('/country',[\App\Http\Controllers\CountryController::class, 'index']);
// Priviledges
Route::get('all-priviledges', [\App\Http\Controllers\Priviledge::class, 'priviledges'])->name('priviledges');
Route::post('priviledge', [\App\Http\Controllers\Priviledge::class, 'addPriviledge'])->name('addPriviledge');
Route::delete('delete-priviledge/{id}', [\App\Http\Controllers\Priviledge::class, 'destroy'])->name('destroy');




