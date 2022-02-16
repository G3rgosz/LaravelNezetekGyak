<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service extends Controller
{
    // public function index($id = null, $name = null){
    //     echo "<h1>Id: ".$id." Név: ".$name."</h1>";
    //     return view("services");
    // }
    public function index(){
        $name = "Béla";
        $email = "bela@test.hu";
        return view("services", compact( "name", "email"));
    }
}
