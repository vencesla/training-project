<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstCOntroller extends Controller
{
    //
    public function home(){
        return view("layouts/home");
    }
}
