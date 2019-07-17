<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest',['except' => 'destroy']);
    }
    public function create() {
        return view('login');
    }
    //TODO: Change error msg and return view for login user and show login user name in menu
    public function store(Request $request) {

        $credentials = $request->only(['email','password']);

        if(Auth::attempt($credentials)){
           return redirect('/');
        }
        else{
            dd('not working');
        }
        dd($credentials);
    }

    public function destroy(Request $request) {
        
        Auth::logout();
        return redirect('/');
    }
}
