<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site extends Controller
{
    public function index(){
        // print("<h1>Szöveg az index metódusból</h1>");
        return view("first");
    }
}
