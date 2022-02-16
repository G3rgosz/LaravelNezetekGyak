<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service extends Controller
{
    public function index($id = null, $name){
        echo "<h1>Id: ".$id." Név: ".$name."</h1>";
        return view("services");
    }
}
