<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
     
    /*
    |           ____
    |          |  _ \
    |          | |_) |
    |          |  _ <
    |          | |_) |
    |          |____/
    |
    |       Browse : (B)READ
    */
    public function index(){
        
        $users = User::paginate(7);

        return response()->json(["data"=> $users],200);
    } 
    /*
    |           _____
    |          |  __ \
    |          | |__) |
    |          |  _  /
    |          | | \ \
    |          |_|  \_\
    |
    |       Read : B(R)EAD
    */
    public function show($id){

        $users = User::find($id);

        return response()->json(["data"=> $users],200);
    }
    /*
    |           ______
    |          |  ____|
    |          | |__
    |          |  __|
    |          | |____
    |          |______|
    |
    |       Read : BR(E)AD
    */
    public function edit ($id, Request $request){

        $user = User::find($id);
        $user->is_complete = 1;
        $user->save();

        return response()->json(["data"=> $user],200);
    }
     
    /*
    |           _____
    |          |  __ \
    |          | |  | |
    |          | |  | |
    |          | |__| |
    |          |_____/
    |
    |       Delete : BREA(D)
    */
    public function destroy($id){

        $user = User::find($id);
        
        $user->delete();

        return response()->json(["data"=> $user],200);
    }
}
