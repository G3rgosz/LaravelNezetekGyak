<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;
use App\Http\Controllers\Service;

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

Route::get('/', function () {
    return view('welcome');
});
Route::view("/services-view", "services");
Route::get("/first", [Site::class, "index"]);
Route::get("/services-controller", [Service::class, "index"]);
Route::get("/services",function(){
    // return "<h1>Szöveg az service útvonalról</h1>";
    return view('services');
});
