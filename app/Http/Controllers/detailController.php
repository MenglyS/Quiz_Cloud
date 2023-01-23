<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailController extends Controller
{
    //
    public function viewDetails(){
        return view('component.single');
    }
}
