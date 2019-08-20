<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $pagination = 12;

        if(request()->category)
        {

            $products = Product::with('categories')->whereHas('categories', function($query) {
                $query->where('slug', request()->category);
            });
            $categoryName =optional($categories->where('slug', request()->category)->first())->name;
        }
        else
        {

            // $products = Product::inRandomOrder()->take(50);
            $products = Product::take(50);
            $categoryName = 'Featured';
        }  
        
        if(request()->sort == 'low_high')
        {
            $products = $products->orderBy('price')->paginate($pagination);
        }
        elseif(request()->sort == 'high_low')
        {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        }
        else{
            $products = $products->paginate($pagination);
        }
        return view('shop')->with([
            'products'      => $products,
            'categories'    => $categories,
            'categoryName' => $categoryName,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug','!=', $slug)->inRandomOrder()->take(4)->get();

        return view('product')->with([

            'product'=> $product,
            'mightAlsoLike' => $mightAlsoLike
            
        ]);
    }

    public function search(Request $request) {

        $request->validate([
            'query' => 'bail|required|min:3',
        ]);

        $query = $request->input('query');


        $products = Product::where('name','Like', '%$query%');

        return view('search')->with('products', $products);
    }
   
}
