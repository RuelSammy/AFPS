<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    //

    public function store(Request $request){
        
        $admin= new Admin();
        $admin-> balance = $request-> balance; 
        // $admin ->psv_name= $request-> psv_name;
        $admin-> save(); 

        return redirect('/home');
    }
}
