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
        $n_route ->route_name= $request-> route_name;
        $n_route-> save();   

        return redirect('/home');
    }

    public function showRoute(){
        $id=request()->Route()->id;
        $get_id=Route::find($id);
        $route_id=$get_id->id;

        return view('pages.index', compact('route_id'));
    }
}
