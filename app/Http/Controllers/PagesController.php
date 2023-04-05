<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $id= request()->user()->id;
        $account=Account::find($id);
        if ($account != null) {
            $balance = $account->balance;
            // Do something with the account balance
            return view('pages.index', compact('balance'));
        } else {
            // Handle the case where $account is null
            $balance=0.0;
            return view('pages.index', compact('balance'));

        }
       // return view('pages.index');
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
    public function account(){
        return view('pages.account');
    }

    public function balances(){
        return view('pages.balance');
    }

    public function logout(){
        return view('pages.user');
    }

}
