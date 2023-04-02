<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    //
    public function store(Request $request){
        
        $n_route= new Route();
        $n_route->route_id = $request-> route_id; 
        $n_route ->psv_name= $request-> psv_name;
        $n_route-> save();   

        return redirect('/home');
    }
}
