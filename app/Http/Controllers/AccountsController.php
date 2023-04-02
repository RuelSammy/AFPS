<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    //

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

        $account = new Account();
        $account->balance = $validateData['balance'];
        $account->save();

        return redirect()->back()->with('status', 'Account successfully created.');
    }
}

