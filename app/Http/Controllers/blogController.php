<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    //
    public function viewBlog(){
        return view('component.blog');
    }
}
