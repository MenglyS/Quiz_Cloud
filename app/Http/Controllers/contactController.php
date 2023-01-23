<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;
use App\Models\Contact_list;
use App\Providers\RouteServiceProvider;

class contactController extends Controller
{
    //
    public function viewContact(){
        return view('component.contact');
    }

    public function saveContact(Request $request){
        $post = new Contact_list();

        $post->name = $request->name;
        $post->email = $request->email;
        $post->subject = $request->subject;
        $post->messages = $request->message;

        $post->save();

        return redirect('contact')->with('status', 'Contact form has been submitted.');
    }

    public function viewDisplay(){
        return view('component.display');
    }


    public function showContact(Request $request)
    {
        $contact_db = DB::select('select * from contact_lists');
        
        return view('component.display', ['contacts'=>$contact_db]);
    }
}
