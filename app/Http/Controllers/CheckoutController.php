<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Log;


class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout')->with([
            'discount'      => getAmountAfterDiscount()->get('discount'),
            'newSubtotal'   => getAmountAfterDiscount()->get('newSubtotal'),
            'newTax'        => getAmountAfterDiscount()->get('newTax'),
            'newTotal'      => getAmountAfterDiscount()->get('newTotal'),
        ]);
    }

    public function store(Request $request)
    {
        //  dd($request->all());
    $contents = Cart::content()->map(function($item){
        
        return $item->model->slug.','.$item->qty;

    })->values()->toJson();
       
       try{

            // $charge = Stripe::charges()->create([

            //     'amount'        => $this->getAmountAfterDiscount()->get('newTotal'),
            //     'currency'      => 'usd',
            //     'source'        => $request->stripeToken,
            //     'description'   => 'Order',
            //     'recipt_email'  => $request->email,
            //     'metadata'      => [

            //         //change order id after we start DB
            //         'contents'  => $contents,
            //         'quantity'  => Cart::instance('default')->count(),
            //         'discount'  => collect(session()->get('coupon'))->tojson(),
            //     ],

            // ]);

            // Insert into orders table
            // $userId = auth()->user() ? auth()->user()->id : null;
           
            // if($userId != null) {

            //     settype($userId, "integer");
            // }
            
           $order =  $this->addToOrdersTables($request, null);
            // insert into order_products table

            //Successfull
            Cart::instance('default')->destroy();
            session()->forget('coupon');

            return back()->with('success message','Thank You! Your Payment Has been successfully Accepted!');

        } 
        catch(CardErrorException $e) {
            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    protected function addToOrdersTables($request, $error) {

        
        $order = Order::create([

            'user_id'                    => auth()->user()->id,
            'billing_fname'              => $request->fname,
            'billing_lname'              => $request->lname,
            'billing_email'              => $request->email,
            'billing_phone'              => $request->phone,
            'billing_address_line1'      => $request->address_line1,
            'billing_address_line2'      => $request->address_line2,
            'billing_city'               => $request->city,
            'billing_state'              => $request->state,
            'billing_zip'                => $request->zip,
            'payment_method'             => $request->payment_method,
            'billing_discount'           => getAmountAfterDiscount()->get('discount'),
            'billing_discount_code'      => getAmountAfterDiscount()->get('code'),
            'billing_subtotal'           => getAmountAfterDiscount()->get('newSubtotal'),
            'billing_tax'                => getAmountAfterDiscount()->get('newTax'),
            'billing_total'              => getAmountAfterDiscount()->get('newTotal'),
            'error'                      => null,

        ]);
            //insert into order_products table
        foreach (Cart::content() as $item) {
            
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }
        return $order;
    }

}
