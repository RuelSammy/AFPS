<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
       public function create()
    {
        return view('accounts.create');
    }

    public function showUsers()
    {
    $users = DB::table('users')->get();

    return view('users', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'balance' => 'required|numeric'
        ]);
        $n_account = new Account();
        $n_account->id = request()->user()->id;
        $n_account->balance = $validateData['balance'];
        $n_account-> balance = $request -> balance; 
       // $n_account-> dependents = $request-> dependents;
        $n_account->save();
        
        return redirect('/home');

        // return redirect()->back()->with('status', 'Account successfully created.');
    }

    public function showBalance(){

        $id= request()->user()->id;
        $account=Account::find($id);
        if ($account != null) {
            $balance = $account->balance;
            // Do something with the account balance
            return view('pages.balance', compact('balance'));
        } else {
            // Handle the case where $account is null
            $balance=0.0;
            return view('pages.balance', compact('balance'));
        }
    }
   
    public function update(){
        $id= request()->user()->id;
        $account=Account::find($id);
        


        

    }



}

