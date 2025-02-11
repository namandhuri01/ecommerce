<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;


class CartController extends Controller
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
        $mightAlsoLike = Product::mightAlsoLike()->get();
       return view('cart')->with([
            'mightAlsoLike' => $mightAlsoLike,
            'discount'      => getAmountAfterDiscount()->get('discount'),
            'newSubtotal'   => getAmountAfterDiscount()->get('newSubtotal'),
            'newTax'        => getAmountAfterDiscount()->get('newTax'),
            'newTotal'      => getAmountAfterDiscount()->get('newTotal'),
       ]);
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
    public function show($id)
    {
        //
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'quantity' => 'bail|required|numeric|between:1,20|min:1'
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 9.']));
            return response()->json(['success' => false], 400);
        }
        if ($request->quantity > $request->productQuantity) {
            session()->flash('errors', collect(['We currently do not have enough items in stock.']));
            return response()->json(['success' => false],419);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true,'code'=>200,'success_message' => 'Quantity was updated successfully!']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicate = Cart::search(function ($cartItem, $rowId) use($request) {
            return $cartItem->id === $request->id;
        });

        if($duplicate->isNotEmpty()) {

            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');;
        }
        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
        // return Redirect::back()->with(['success_message', 'Item was added to your cart!']);
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
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed!');
    }

    /**
     * switchToSaveForLater the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToSaveForLater($id) {

        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already Saved For Later!');
        }

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item has been Saved For Later!');
    }

}
