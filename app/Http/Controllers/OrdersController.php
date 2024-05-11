<?php

namespace App\Http\Controllers;

use Auth;
use App\Order;
use Illuminate\Http\Request;
class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = auth()->user()->orders;
        return view('user-orders' )->with('orders', $orders);
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
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if(auth()->user()->id !== $order->user_id){
            return back()->withError('sorry You are not authorize!');
        }
        $products = $order->products;
        return view('user-orders')->with([

            'order'     => $order,
            'products'  => $products
        ]);
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

    /**
     * update the specified resource in storage
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
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
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
    
    }


}
