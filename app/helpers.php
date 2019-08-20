<?php

use Carbon\Carbon;

function presentPrice($price)
{
    // return 'Rs'.number_format($price / 100, 2); //divide by 100 and 2 decimal example $price = 15000/100 = 1.50
    return 'Rs'.number_format($price);
}

function productImage($path) 
{

    return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/logos/logo-5.png');
}

function userImage($path)
{
    return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/authors/default.png');

}

function setActiveCategory($category, $output = 'active') 
{
    return request()->category == $category ? $output : '';
}

function getAmountAfterDiscount()
    {
        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code = session()->get('coupon')['name'] ?? null;
        $newSubtotal = (Cart::subtotal() - $discount);
        if ($newSubtotal < 0) {
            $newSubtotal = 0;
        }
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);
        
        return collect([
            'tax'           => $tax,
            'discount'      => $discount,
            'newSubtotal'   => $newSubtotal,
            'newTax'        => $newTax,
            'newTotal'      => $newTotal,
            'code'          => $code,
        ]);
    }
