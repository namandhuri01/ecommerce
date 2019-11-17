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

        $stockLevel = getStockLevel($product->quantity);

        return view('product')->with([

            'product'       => $product,
            'stockLevel'    => $stockLevel,
            'mightAlsoLike' => $mightAlsoLike
            
        ]);
    }

    public function search(Request $request) {

        $query = $request->input('query');
        $products = Product::where('name','Like', "%$query%")
                        ->orWhere('details', 'Like',"%$query%")
                        ->orWhere('description', 'Like',"%$query%")
                        ->paginate(12);

        return view('search')->with([
            'products' => $products,
            'query' => $query
        ]);
    }

    // public function priceSort(Request $request) {

    //     if(request()->sort == 'low_high')
    //     {
    //         $products = $products->orderBy('price')->paginate($pagination);
    //     }
    //     elseif(request()->sort == 'high_low')
    //     {
    //         $products = $products->orderBy('price', 'desc')->paginate($pagination);
    //     }
    //     else{
    //         $products = $products->paginate($pagination);
    //     }
    // }

    public function showCategoryProduct()
    {
        $cat = Category::with('products')->get()->pluck('products')->unique();
        $cats = Category::with('products')->get()->pluck('products')->flatten();
        $cata = Category::with('products')->get()->flatten();
        $products = Product::with('categories')->get();
        $categories = Category::with('products')->get()->flatten();
        // dd($categories);
        // dd($products);
        \Log::info($cat);
        // \Log::info("namanjkdsv kjdlgvd vuid vuidsvghd vduvdvliu");
        // \Log::error($cats);
        // \Log::info("namkjcbh caha cjakc kjba cahc aianjkdsv kjdlgvd vuid vuidsvghd vduvdvliu");
        // \Log::warning($cata);
        // var_dump($cat->take(2));
        // var_dump('Cats print ');
        // var_dump($cats);
        // die();
        return view('showproduct')->with(['categories' => $categories]);
    }
   
}
