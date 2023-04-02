<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('pages.index');
    }

    public function history()
    {
        return view('pages.history');
    }

    public function landing(){
        
        return view('pages.landingpage');
    }
    public function route(){
        return view ('pages.admin');
    }

}
