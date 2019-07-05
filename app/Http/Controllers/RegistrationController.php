<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;



class RegistrationController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}
  public function create()
	{
		
		return view('login');
	}  
	public function store (Request $request)

	{
		$this->validate(request(),[

           'name'       => 'bail|required|string',
           'email'      => 'bail|required|email|unique:users',
		   'password'   => 'bail|required|string|min:8',
		   'phone'		=> 'bail|required|digits:10'
        ]);
      

		
		$user = User::create([
			'name'			=> 	$request->name,
			'email'			=> 	$request->email,
			'password'      =>	bcrypt($request['password']),
			'phone'			=> $request->phone,

		]);
		return view('login');
		return response()->json(["data"=> $user],200);
	} 
	public function index(){

		$users = User::all();

		return  view('welcome');

	}
}
