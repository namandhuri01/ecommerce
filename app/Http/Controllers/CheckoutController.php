<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('checkout')->with([
        'discount'      => $this->getAmountAfterDiscount()->get('discount'),
        'newSubtotal'   => $this->getAmountAfterDiscount()->get('newSubtotal'),
        'newTax'        => $this->getAmountAfterDiscount()->get('newTax'),
        'newTotal'      => $this->getAmountAfterDiscount()->get('newTotal'),
       ]);
    }

    public function store(CheckoutRequest $request)
    {
    $contents = Cart::content()->map(function($item){
        return $item->model->slug.','.$item->qty;
    })->values()->toJson();
       try{

            $charge = Stripe::charges()->create([

                'amount'        => $this->getAmountAfterDiscount()->get('newTotal'),
                'currency'      => 'usd',
                'source'        => $request->stripeToken,
                'description'   => 'Order',
                'recipt_email'  => $request->email,
                'metadata'      => [

                    //change order id after we start DB
                    'contents'  => $contents,
                    'quantity'  => Cart::instance('default')->count(),
                    'discount'  => collect(session()->get('coupon'))->tojson(),
                ],

            ]);
            //Successfull
            Cart::instance('default')->destroy();
            session()->forget('coupon');

            return back()->with('success message','Thank You! Your Payment Has been successfully Accepted!');

        } catch(CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
       }
    }
    private function getAmountAfterDiscount()
    {
        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);
        
        return collect([
            'discount'  => $discount,
            'newSubtotal'   => $newSubtotal,
            'newTax'        => $newTax,
            'newTotal'      => $newTotal,
        ]);
    }
}
