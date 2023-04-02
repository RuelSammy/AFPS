<?php

namespace App\Http\Controllers;

use App\Models\Psv;
use Illuminate\Http\Request;

class PsvsController extends Controller
{
    //

    public function store(Request  $request){

        $psv=new Psv();
        $psv = $request -> cost;
        $psv->save();



    }
}
