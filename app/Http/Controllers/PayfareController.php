<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayfareController extends Controller
{
    //
    public function payFare(Request $request)
    {
    
        
     $num_customers = $request->input('num_customers');
    // Process the payment for the specified number of customers
    }

}
