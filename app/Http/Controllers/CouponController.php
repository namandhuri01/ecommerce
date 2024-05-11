<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Jobs\UpdateCoupon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CouponController extends Controller
{
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
        
    }

    /*
    |              /\
    |             /  \
    |            / /\ \
    |           / ____ \
    |          /_/    \_\
    |
    |         Add : BRE(A)D
    */
 
    public function store(Request $request) {
        
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        
        if(!$coupon)
        {
            // return redirect()->route('cart.index')->withErrors('Invalid Coupon Code. ');
            return back()->withErrors('Invalid Coupon Code. ');
        }
        dispatch_now(new UpdateCoupon($coupon));
        
        return back()->with('success_message', 'Coupon Applied Successfully');

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
    public function destroy(){

        session()->forget('coupon');
        return back()->with('success_message', 'Coupon Removed Successfully');
    }
}
