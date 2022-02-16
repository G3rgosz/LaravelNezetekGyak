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
// Route::view("/services-view", "services");
// Route::get("/first", [Site::class, "index"]);
// Route::get("/services-controller", [Service::class, "index"]);
// Route::get("/services/{id?}/{name?}", [Service::class, "index"]);
// Route::get("/services/{id}/{name}", function($id, $name){
//     echo "<h1>".$id."</h1>";
//     echo "<h1>".$name."</h1>";
// })->where(["id" => "[0-9]+", "name" => "[a-zA-Zé]+"]);
// Route::get("/services",function(){
//     // return "<h1>Szöveg az service útvonalról</h1>";
//     return view('services');
// });
// Route::redirect("/products", "/about"); //közvetlen átirányítás
// Route::get("/about",function(){
//     return view('about');
// });
// Route::get("/gergo",function(){
//     return view("gergo");
// });
// Route::get("/about/{id?}/{name}/{email}",function($id, $name, $email){
//     $data = [ "id" => $id, "name" => $name, "email" => $email ];
//     return view('about', $data);
// });
Route::get("/about",function(){
    $name = "Béla";
    $email = "bela@test.hu";
    return view('about', compact("name", "email"));
});
Route::get("/services", [Service::class, "index"]);
Route::get("/gyak",function(){
    return view("gyakorlo");
});
Route::get("/about_us", function(){
    return view("admin/about_us", [
        "names" => ["Béla", "Géza", "Kata", "Pali"]
    ]);
});