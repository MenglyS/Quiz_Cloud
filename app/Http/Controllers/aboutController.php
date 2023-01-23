<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //
    public function viewAbout(){
        return view('component.about');
    }
}
