<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'opt_in' => 'required|bool',
        ]);

        // store
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name =  $request->last_name;
        $user->email = $request->email;
        $user->opt_in =  $request->opt_in;
        $user->save();

        return response()->json(['success' => 'User created']);
    }
}
