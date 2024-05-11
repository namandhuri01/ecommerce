<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class MainPageController extends Controller
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

    public function index() {

        // $product = Product::inRandomOrder()->take(20)->get();
        $product = Product::inRandomOrder()->take(8)->get();

        return view('welcome')->with('products', $product);

    }

    public function show() {

        $product::with('category')->where('');
    }

}
